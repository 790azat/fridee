<div class="col-12 my-4 p-3">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 p-0 m-0 d-flex bg-light">
        @foreach($collaborators as $collaborator)
            <div class="col d-flex flex-wrap pe-2 mb-2">
                <div class="rounded-3 shadow-sm bg-white col-12 py-5">
                    <div class="col-12 d-flex justify-content-center">
                        <div style="width: 100px;height: 100px;">
                            <img src="{{ asset('storage/users-avatar/' . $collaborator->avatar) }}" class="rounded-circle shadow" style="width: 100%;height: 100%;object-fit: cover" alt="">
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-5">
                        <p class="fw-bold fs-5">{{ $collaborator->name }}</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center mt-2">
                        <i class="fa-solid fa-film me-1"></i><p> {{ $collaborator->role }}</p>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <a href="profile/{{$collaborator->id}}">
                            <button class="btn btn-outline-success px-4 shadow-sm">Profile</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
