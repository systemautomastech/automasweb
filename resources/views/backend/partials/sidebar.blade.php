<aside class="sidebar offcanvas-md offcanvas-start" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="sidebar-header offcanvas-header">
        <h2 id="sidebarMenuLabel" class="m-0">Dashboard</h2>
        <button type="button" class="btn-close btn-close-white d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="sidebar-body p-0">
        <nav class="sidebar-nav">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('menus.index') }}" class="nav-link {{ request()->routeIs('menus.*') ? 'active' : '' }}">
                        <i class="bi bi-list-check"></i>
                        <span>Menus</span>
                    </a>
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

    .sidebar-nav {
        padding: 20px 0;
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
        padding: 12px 20px;
        color: #ecf0f1;
        text-decoration: none;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
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

    .nav-link span {
        font-size: 14px;
    }
    
    .dd{
        max-width: 100% !important;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 250px;
        }
    }
</style>
