<div class="ms-3 ms-sm-4 text-light flex-nowrap d-flex gap-2 align-items-center justify-content-center">

    @guest
        <a href="{{ route('login') }}" class="text-hover">
            <p>Login</p>
        </a>
        <a href="{{ route('register') }}" class="text-hover">
            <p>Register</p>
        </a>
    @endguest

    @auth

        @if(Route::currentRouteName() == 'welcome')
            <div class="btn btn-outline-light p-3">
                <a href="/chatify" class="d-flex p-0" @if($messageCount > 0) style="margin-bottom: -15px" @endif>
                    @if($messageCount > 0)
                        <i class="fa-solid fa-message"><p class="bg-danger rounded-circle" style="position: relative;top: -23px;left: 7px;width: 15px;height: 15px;line-height: 15px;font-size: 10px">{{ $messageCount }}</p></i>
                    @else
                        <i class="fa-regular fa-message"></i>
                    @endif
                </a>
            </div>
        @endif

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
                    <button data-bs-toggle="modal" href="#editProfileModal" class="dropdown-item">
                        <i class="fa-solid fa-pen"></i> Edit profile
                    </button>
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
