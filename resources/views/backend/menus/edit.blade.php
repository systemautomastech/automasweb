@extends('backend.layouts.app')

@section('content')
<div class="py-6">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
			<div class="mb-3">
				<label class="form-label">Menu Name</label>
				<input type="text" id="menu-name" class="form-control" placeholder="Main Menu" value="{{ $menu->name }}">
			</div>

			<textarea id="menu-formatted-data" class="d-none">@json($formatted)</textarea>

			@include('backend.menus._form')

		</div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	$(function() {
		const formatted = JSON.parse(document.getElementById('menu-formatted-data').value);

		function renderItems(items, $list) {
			items.forEach(function(it) {
				const $li = $(menuItem({
					title: it.title ?? '',
					url: it.url ?? '',
					route: it.route ?? '',
					route_params: it.route_params ?? null,
					new_tab: !!it.new_tab,
					icon: it.icon ?? '',
					color: it.color ?? '',
					bg_color: it.bg_color ?? '',
					css_class: it.css_class ?? '',
					link_type: it.route ? 'route' : 'url'
				}));
				$list.append($li);

				$li.find('.link-type').val(it.route ? 'route' : 'url');
				$li.find('.url').val(it.url ?? '');
				$li.find('.route').val(it.route ?? '');
				$li.find('.route-params').val(typeof it.route_params === 'object' && it.route_params !== null ? JSON.stringify(it.route_params) : (it.route_params ?? ''));
				if (it.icon) $li.find('.icon').val(it.icon);
				if (it.new_tab) $li.find('.new_tab').prop('checked', true);
				if (it.color) $li.find('.color').val(it.color);
				if (it.bg_color) $li.find('.bg-color').val(it.bg_color);
				if (it.css_class) $li.find('.css-class').val(it.css_class);
				updateLinkFields($li);
				syncColorInputs($li);

				if (it.children && it.children.length) {
					let childList = $li.children('.dd-list');
					if (!childList.length) {
						childList = $('<ol class="dd-list"></ol>');
						$li.append(childList);
					}
					renderItems(it.children, childList);
				}
			});
		}

		if (formatted && formatted.items) {
			$('#menu-name').val(formatted.name || '');
			renderItems(formatted.items, $('#menu-builder > .dd-list'));
		}

		$('#save-menu').off('click').on('click', async function() {
			let name = $('#menu-name').val();
			if (!name) return alert('Menu name required');

			let items = buildMenu($('#menu-builder > .dd-list'));

			try {
				const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

				const res = await fetch(`{{ route('menus.update', $menu->id) }}`, {
					method: 'PUT',
					headers: {
						'Content-Type': 'application/json',
						'X-CSRF-TOKEN': token,
						'Accept': 'application/json'
					},
					body: JSON.stringify({
						name: name,
						items: items
					})
				});

				if (res.ok) {
					alert('Menu updated');
				} else {
					const err = await res.json().catch(() => ({}));
					alert('Failed to update menu');
					console.error(err);
				}
			} catch (e) {
				console.error(e);
				alert('An error occurred');
			}
		});
	});
</script>
@endsection