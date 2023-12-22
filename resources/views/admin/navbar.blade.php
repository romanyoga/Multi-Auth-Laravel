<nav class="navbar navbar-expand px-3 border-bottom">
    <button class="btn" id="sidebar-toggle" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="nav-link">{{ Auth::user()->name }}</span>
            </li>
            <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                    <img src="images/profile.jpg" class="avatar img-fluid rounded" alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{url('profile')}}" class="dropdown-item nav-link">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                            class="dropdown-item nav-link">Logout</a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>