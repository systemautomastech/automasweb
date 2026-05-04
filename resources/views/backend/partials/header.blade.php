<style>
	::after.hover-scale:hover {
		transform: scale(1.1);
	}
</style>
<header class="app-header navbar navbar-expand bg-white shadow-sm border-bottom px-3">
	<button class="btn btn-outline-secondary btn-sm ms-2 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
		<span class="navbar-toggler-icon"></span>
	</button>

	<a href="{{ route('home') }}">
		<i class="bi bi-globe fs-4 hover-scale text-primary"></i>
	</a>

	<div class="d-flex align-items-center ms-auto gap-3">
		<form class="d-none d-md-flex" role="search" action="#" method="GET">
			<div class="input-group input-group-sm">
				<span class="input-group-text bg-light border-0">
					<i class="bi bi-search"></i>
				</span>
				<input type="search" class="form-control bg-light border-0" name="q" placeholder="Search..." aria-label="Search">
			</div>
		</form>

		<div class="dropdown">
			<button class="btn btn-light btn-sm dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				<span class="rounded-circle bg-primary text-white d-inline-flex justify-content-center align-items-center" style="width: 32px; height: 32px;">
					<i class="bi bi-person"></i>
				</span>
				<span class="d-none d-md-inline">Admin</span>
			</button>
			<ul class="dropdown-menu dropdown-menu-end shadow-sm">
				<li><a class="dropdown-item" href="{{ url('/backend/profile') }}">Profile</a></li>
				<li><a class="dropdown-item" href="{{ url('/backend/settings') }}">Settings</a></li>
				<li>
					<hr class="dropdown-divider">
				</li>
				<li>
					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<button type="submit" class="dropdown-item text-danger">Logout</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
</header>