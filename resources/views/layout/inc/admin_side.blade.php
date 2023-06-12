<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="/admin/dashboard">
            {{ env('APP_NAME') }}
            {{-- <img src="{{ asset('admin/images/brand/logo/logo-inverse.svg') }}" alt="" /> --}}
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link  " href="/admin/dashboard" >
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/manage_user" >
                    <i class="nav-icon fe fe-users me-2"></i> Manage Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="/admin/dashboard0" >
                    <i class="nav-icon fe fe-coin me-2"></i> Fund Deopsit
                </a>
            </li>
            
        </ul>

    </div>
</nav>