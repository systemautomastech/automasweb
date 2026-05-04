<aside class="sidebar offcanvas-md offcanvas-start" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="sidebar-header offcanvas-header">
        <h2 id="sidebarMenuLabel" class="m-0">Dashboard</h2>
        <button type="button" class="btn-close btn-close-white d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="sidebar-body p-2">
        <nav class="sidebar-nav">
            <div class="shadow-sm mb-4 d-flex justify-content-center algn-items-center">
                <a href="{{ route('dashboard') }}" class="navbar-brand fw-bold text-decoration-none text-dark">
                    <img src="{{ asset(get_setting('company_white_logo')) }}" alt="{{ get_setting('company_name') }} Logo" class="img-fluid p-3" style="max-height: 70px; object-fit: contain;">
                </a>
            </div>
            <ul class="nav-menu">

                <li class="nav-item">
                    <input type="text" class="form-control form-control-sm border-1 mb-3" placeholder="Search..." aria-label="Search in sidebar">
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <button
                        type="button"
                        class="nav-link nav-link-toggle {{ request()->routeIs('site.setting', 'menus.*', 'appearence.setting') ? 'active' : '' }}"
                        data-bs-toggle="collapse"
                        data-bs-target="#settingsSubmenu"
                        aria-expanded="{{ request()->routeIs('site.setting', 'menus.*', 'appearence.setting') ? 'true' : 'false' }}"
                        aria-controls="settingsSubmenu">
                        <span class="nav-link-start">
                            <i class="bi bi-gear"></i>
                            <span>Settings</span>
                        </span>
                        <i class="bi bi-chevron-down nav-link-chevron"></i>
                    </button>

                    <ul id="settingsSubmenu" class="nav-submenu collapse {{ request()->routeIs('site.setting', 'menus.*', 'appearence.setting') ? 'show' : '' }}">
                        <li class="nav-subitem">
                            <a href="{{ route('menus.index') }}" class="nav-sublink {{ request()->routeIs('menus.*') ? 'active' : '' }}">
                                <i class="bi bi-list-check"></i>
                                <span>Menus</span>
                            </a>
                        </li>
                        <li class="nav-subitem">
                            <a href="{{ route('site.setting') }}" class="nav-sublink {{ request()->routeIs('site.setting') ? 'active' : '' }}">
                                <i class="bi bi-sliders"></i>
                                <span>Site Settings</span>
                            </a>
                        </li>
                        <li class="nav-subitem">
                            <a href="{{ route('appearence.setting') }}" class="nav-sublink {{ request()->routeIs('appearence.setting') ? 'active' : '' }}">
                                <i class="bi bi-palette"></i>
                                <span>Appearance</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<style>
    .sidebar {
        width: 250px;
        height: 100vh;
        background: linear-gradient(180deg, #16212b 0%, #223243 100%);
        color: #ecf0f1;
        padding: 0;
        position: fixed;
        left: 0;
        top: 0;
        overflow-y: auto;
        box-shadow: 2px 0 18px rgba(0, 0, 0, 0.14);
        z-index: 1031;
    }

    .sidebar-header {
        padding: 20px;
        background: rgba(0, 0, 0, 0.14);
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .sidebar-header h2 {
        margin: 0;
        font-size: 20px;
        font-weight: 600;
    }

    .sidebar-toggle {
        display: none;
        background: none;
        border: none;
        color: #ecf0f1;
        font-size: 18px;
        cursor: pointer;
    }

    .nav-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-item {
        margin: 0;
    }

    .nav-link {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 12px 20px;
        color: #ecf0f1;
        text-decoration: none;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
        width: 100%;
        background: transparent;
        border-top: 0;
        border-right: 0;
        border-bottom: 0;
        text-align: left;
        cursor: pointer;
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.08);
        border-left-color: #67b7ff;
    }

    .nav-link.active {
        background: rgba(255, 255, 255, 0.1);
        border-left-color: #67b7ff;
        font-weight: 600;
    }

    .nav-link i {
        width: 20px;
        margin-right: 15px;
        text-align: center;
        font-size: 16px;
    }

    .nav-link-toggle {
        justify-content: space-between;
        align-items: center;
    }

    .nav-link-start {
        display: flex;
        align-items: center;
        min-width: 0;
    }

    .nav-link-chevron {
        margin-right: 0;
        font-size: 12px;
        transition: transform 0.2s ease;
    }

    .nav-link[aria-expanded="true"] .nav-link-chevron {
        transform: rotate(180deg);
    }

    .nav-submenu {
        list-style: none;
        padding: 0 0 8px;
        margin: 0;
    }

    .nav-subitem {
        margin: 0;
    }

    .nav-sublink {
        display: flex;
        align-items: center;
        padding: 10px 20px 10px 52px;
        color: rgba(236, 240, 241, 0.9);
        text-decoration: none;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }

    .nav-sublink:hover {
        color: #67b7ff;

    }

    .nav-sublink.active {
        font-weight: 600;
        color: #67b7ff;
    }

    .nav-sublink i {
        width: 18px;
        margin-right: 12px;
        text-align: center;
        font-size: 14px;
    }

    .nav-sublink span {
        font-size: 13px;
    }

    .nav-link span {
        font-size: 14px;
    }

    .dd {
        max-width: 100% !important;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 250px;
        }
    }
</style>