@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-soft p-4">
        <div class="d-flex align-items-start justify-content-between mb-3 gap-3">
            <div>
                <h1 class="h3 mb-1">Menus</h1>
                <p class="text-muted small mb-0">Manage site navigation menus and their items.</p>
            </div>

            <div class="d-flex gap-2 align-items-center">
                <form method="GET" action="{{ route('menus.index') }}" class="d-flex" style="min-width:220px;">
                    <input name="q" value="{{ request('q') }}" class="form-control-sm me-2 border-1" placeholder="Search menus..." aria-label="Search menus">
                    <button class="btn btn-outline-secondary btn-sm">Search</button>
                </form>
                <a href="{{ route('menus.create') }}" class="btn btn-success btn-sm">Create New</a>
            </div>
        </div>

        @if($menus->isEmpty())
        <div class="card-body">
            <h4 class="mb-1 text-center">No menus yet</h4>
            <p class="text-muted small mb-3 text-center">Create a new menu to get started.</p>
            <p class="text-center">
                <a href="{{ route('menus.create') }}" class="btn btn-success">Create Menu</a>
            </p>
        </div>
        @else
        <div class="row g-3 card-body">
            @foreach($menus as $menu)
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start gap-3 border-bottom pb-3">
                <div>
                    <h5 class="card-title mb-1">{{ $menu->name }}</h5>
                    @if(!empty($menu->description))
                    <div class="text-muted small">{{ $menu->description }}</div>
                    @endif
                </div>

                <div class="ms-auto d-flex gap-2">
                    <a href="{{ route('menus.edit', $menu) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                    <form method="POST" action="{{ route('menus.destroy', $menu) }}" onsubmit="return confirm('Are you sure you want to delete this menu?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection