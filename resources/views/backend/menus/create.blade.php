@extends('backend.layouts.app')
@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

            <div class="mb-3">
                <label class="form-label">Menu Name</label>
                <input type="text" id="menu-name" class="form-control" placeholder="Main Menu">
            </div>

            @include('backend.menus._form')

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function() {
        $('#save-menu').off('click').on('click', async function() {
            let name = $('#menu-name').val();
            if (!name) return alert('Menu name required');

            let items = buildMenu($('#menu-builder > .dd-list'));

            try {
                const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                const res = await fetch('{{ route("menus.store") }}', {
                    method: 'POST',
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

                if (res.status === 201) {
                    const data = await res.json();
                    alert('Menu saved');
                    window.location = `{{route('menus.index')}}/${data.id}/edit`;
                } else {
                    const err = await res.json().catch(() => ({}));
                    alert('Failed to save menu');
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