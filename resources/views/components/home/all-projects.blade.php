<div class="col-12 my-4 shadow p-3">
    <div class="row row-cols-1 row-cols-sm-2 row-cls-md-3 row-cols-lg-4 p-0 m-0 d-flex">
        @foreach($videos as $video)
            <div class="col mb-3 pe-1 pb-0 d-flex flex-wrap">
                <div class="shadow p-2">
                    <a href="{{ $video->link }}" target="_blank" class="col-12">
                        <img src="{{ $video->image }}" alt="" style="width: 100%;height: 100%;object-fit: cover">
                    </a>
                    <div class="col-12 pt-2 text-center d-flex align-items-center">
                        <a href="profile/{{$video->by_user_id}}">
                            <div class="d-flex justify-content-center align-items-center gap-1">
                                <div style="width: 20px;height: 20px" class="d-flex justify-content-center align-items-center">
                                    <img src="{{ 'storage/users-avatar/' . \App\Models\User::find($video->by_user_id)->avatar }}" class="rounded-circle" style="width: 100%;height: 100%;object-fit: cover" alt="">
                                </div>
                                <div>
                                    <p class="text-decoration-underline">
                                        {{ \App\Models\User::find($video->by_user_id)->name }}
                                    </p>
                                </div>
                            </div>
                        </a>
                        <p class="ms-2">{{ $video->name }}</p>
                        <p style="font-size: 10px" class="ms-auto">{{ $video->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
