<div class="ms-4 text-light flex-nowrap d-flex gap-2 align-items-center justify-content-center">
    @guest
        <a href="{{ route('login') }}" class="text-hover">
            <p>Login</p>
        </a>
        <a href="{{ route('register') }}" class="text-hover">
            <p>Register</p>
        </a>
    @endguest
    @auth
        <div class="dropdown">
            <button class="btn btn-outline-light flex-nowrap d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user me-1"></i>
                {{ Auth::user()->name }}
                <i class="fa-solid fa-caret-down ms-1"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ route('home') }}">
                        <div>
                            <i class="fa-solid fa-gauge"></i> Dashboard
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div>
                            <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    @endauth
</div>
