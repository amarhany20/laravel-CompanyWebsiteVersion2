<header>
    <nav id="navbar" style="backdrop-filter: blur(10px);" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-bold" href="#">EDG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav py-1 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('/contact') ? 'active' : '' }}" href="contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class=" nav-link dropdown-toggle {{ request()->is('project/all') ? 'active' : '' }}"
                            href="/project/all" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item " href="#">Project 1</a></li>
                            <li><a class="dropdown-item " href="#">Project 2</a></li>
                            <li><a class="dropdown-item " href="#">Project 3</a></li>
                            <li><a class="dropdown-item " href="/project/all">All Projects</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">العربيه</a>
                    </li>
                    <li class="navbar-nav">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
