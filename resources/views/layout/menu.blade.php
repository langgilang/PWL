<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ ('/') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ ('/about') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    About
                </p>
            </a>
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


{{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('article') }}">Article</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav> --}}