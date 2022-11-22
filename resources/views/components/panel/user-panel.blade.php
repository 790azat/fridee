<div class="container">
    <div class="col-12 d-flex my-3">
        <div class="col-12 d-flex">
            <div class="col-auto">
                <div style="width: 60px;height: 60px">
                    <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}" class="rounded-circle" style="width: 100%;height: 100%;object-fit: cover" alt="">
                </div>
            </div>
            <div class="col-auto d-flex justify-content-center align-content-center flex-wrap ms-3">
                <div class="col-12 d-flex align-items-center gap-1">
                    <i class="fa fa-solid fa-check-circle" style="color: #77c400"></i>
                    <p class="fw-bold">{{ Auth::user()->name }}</p>
                </div>
                <div class="col-12">
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
            <div class="shadow-sm d-flex justify-content-center align-items-center gap-1 p-2">
                <div class="text-light btn btn-secondary"><a href="/" class="text-hover"><div class="text-nowrap"><i class="fa-solid fa-video me-1"></i> My Projects</div></a></div>
                <div class="text-light btn btn-secondary"><a href="/" class="text-hover"><div class="text-nowrap"><i class="fa-solid fa-photo-film"></i> All projects</div></a></div>
                <div class="text-light btn btn-secondary"><a href="/" class="text-hover"><div class="text-nowrap"><i class="fa-solid fa-people-group me-1"></i> Other collaborators</div></a></div>
            </div>
        </div>
    </div>
    <div class="col-12">
        @include('components.panel.chat')
    </div>
</div>
