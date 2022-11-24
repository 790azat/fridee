<div class="col-12 bg-dark">
    <div class="container py-3 d-flex align-items-center">
        @include('components.welcome.header.logo')
        @if(Route::currentRouteName() == 'welcome')
            @include('components.welcome.header.menu')
        @endif
        @include('components.welcome.header.links')
        @include('components.welcome.header.button')
    </div>
</div>
