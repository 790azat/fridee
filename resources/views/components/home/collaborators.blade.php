<div class="col-12 my-4 p-3">
    <div class="row row-cols-1 row-cols-sm-2 p-0 m-0 d-flex">
        @foreach($collaborators as $collaborator)
            <div class="col d-flex flex-wrap p-0 mb-1 pe-1">
                <div class="col-12 p-3 rounded border d-flex">
                    <div class="col-auto">
                        <div style="width: 80px;height: 80px">
                            <img class="rounded-circle" src="{{ asset('storage/users-avatar/' . $collaborator->avatar) }}" style="width: 100%;height: 100%;object-fit: cover;object-position: top" alt="">
                        </div>
                    </div>
                    <div class="col ms-3 d-flex align-content-center flex-wrap">
                        <div class="col-12">
                            <p class="fs-5 fw-bold">{{ $collaborator->name }}</p>
                        </div>
                        <div class="col-12">
                            <p class="fs-6">{{ $collaborator->email }}</p>
                        </div>
                    </div>
                    <div class="col-auto flex-row-reverse d-flex align-content-center flex-wrap">
                        <div class="col-12">
                            <div class="btn btn-primary">
                                <a href="/">
                                    <p style="font-size: 14px">Profile</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="btn btn-primary">
                                <a href="/">
                                    <p style="font-size: 14px">Profile</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
