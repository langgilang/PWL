<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item {{ Route::is('/') ? 'active' : '' }}">
            @can('user-display')     
            <a href="{{ ('/') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                </p>
            </a>
            @endcan
        </li>
        <li class="nav-item" {{ Route::is('/') ? 'active' : '' }}>
            @can('admin-article')
            <a href="{{ ('/about') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Data User
                </p>
            </a>
            @endcan
        </li>
        <li class="nav-item">
            <a href="{{ ('/article') }}" class="nav-link">
                <i class="nav-icon fa fa-folder"></i>
                <p>
                    Article
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ ('/setting') }}" class="nav-link">
                <i class="nav-icon fa fa-cog"></i>
                <p>
                    Setting
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>