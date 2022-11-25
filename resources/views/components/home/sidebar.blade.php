<div class="h-100 flex-column flex-shrink-0 p-3 text-white bg-dark collapse" id="collapseExample" style="width: 280px;position: absolute;z-index: 100;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Fridee menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('my-projects') }}" class="nav-link @if(Route::currentRouteName() == 'my-projects') active @endif text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                My projects
            </a>
        </li>
        <li>
            <a href="{{ route('all-projects') }}" class="nav-link @if(Route::currentRouteName() == 'all-projects') active @endif text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                All projects
            </a>
        </li>
        <li>
            <a href="{{ route('collaborators') }}" class="nav-link @if(Route::currentRouteName() == 'collaborators') active @endif text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                All collaborators
            </a>
        </li>
        @if(Route::currentRouteName() == 'profile')
            <li>
                <a class="nav-link @if(Route::currentRouteName() == 'profile') active @endif text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Profile
                </a>
            </li>
        @endif
    </ul>
</div>
