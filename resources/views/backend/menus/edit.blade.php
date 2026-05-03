@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12 col-xxl-11">
			<div class="card shadow-sm border-0">
				<div class="card-body p-4">
					<div class="mb-3">
						<label class="form-label">Menu Name</label>
						<input type="text" id="menu-name" class="form-control" placeholder="Main Menu" value="{{ $menu->name }}">
					</div>

					<textarea id="menu-formatted-data" class="d-none">@json($formatted)</textarea>

					@include('backend.menus._form')
				</div>
			</div>
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
				const $li = $(menuItem(it.title ?? '', it.url ?? ''));
				$list.append($li);

				if (it.icon) $li.find('.icon').val(it.icon);
				if (it.new_tab) $li.find('.new_tab').prop('checked', true);

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

				const res = await fetch(`/menus/{{ $menu->id }}`, {
					method: 'PUT',
					headers: {
						'Content-Type': 'application/json',
						'X-CSRF-TOKEN': token,
						'Accept': 'application/json'
					},
					body: JSON.stringify({ name: name, items: items })
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
