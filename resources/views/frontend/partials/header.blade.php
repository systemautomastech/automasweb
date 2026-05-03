<!-- Top Bar -->
<div id="top-bar" class="header fixed-top pt-2 pb-2 bg-transparent" style="z-index: 9999;">
    <div class="container-fluid container-xl">
        <div class="d-flex justify-content-end align-items-center flex-nowrap gap-2 topbar-flex-wrap small w-100">

            <!-- Hotline -->
            <div class="text-dark text-nowrap flex-shrink-1">
                Hotline:
                <a href="tel:09617-300600" class="text-decoration-none text-dark fw-bold">
                    09617-300600
                </a>
            </div>

            <!-- Support + Auth Buttons -->
            <div class="d-flex align-items-center gap-2 text-nowrap flex-shrink-1">
                <a href="#support" class="btn btn-xs text-white"
                    style="background-color: #F35813; padding: 4px 8px; border-radius: 4px;">
                    Support
                </a>

                <a href="login.html" class="btn btn-primary btn-xs">Login</a>
            </div>
        </div>
    </div>
</div>

<!-- Header & Navigation -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <!-- Logo -->
        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="/assets/img/system_logo.png" alt="brand-logo"
                style="height: 100%; width: 100%; object-fit: contain; display: block;">
        </a>

        <!-- Navigation -->
        <nav id="navmenu" class="navmenu">
            @php
                use App\Models\Menu;

                $menu = Menu::where('name', 'Main Menu')->first() ?? Menu::first();
                $items = $menu ? $menu->items()->with('children')->get() : collect();
            @endphp

            <ul>
                @if($items->count())
                    @include('frontend.partials._menu_items', ['items' => $items])
                @else
                    <li>
                        <a href="{{ url('/') }}" class="active">Home</a>
                    </li>
                @endif
            </ul>

            <!-- Mobile Nav Toggle -->
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentUrl = window.location.href;
        console.log("Current URL:", currentUrl);

        document.querySelectorAll("#navmenu a").forEach(link => {
            console.log("Link href:", link.href);

            if (link.href === currentUrl) {
                link.classList.add("active");
            }
        });
    });
</script>