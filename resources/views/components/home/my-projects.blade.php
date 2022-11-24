<div class="col-12 my-4 shadow p-3">
    <div class="row row-cols-1 row-cols-sm-2 row-cls-md-3 p-0 m-0 d-flex">
        @foreach($videos as $video)
            <a href="{{ $video->link }}" target="_blank" class="col mb-3 pe-1 pb-0 d-flex flex-wrap">
                <div class="shadow p-2">
                    <div class="col-12">
                        <img src="{{ $video->image }}" alt="" style="width: 100%;height: 100%;object-fit: cover">
                    </div>
                    <div class="col-12 pt-2 text-center d-flex justify-content-between align-items-center">
                        <p>{{ $video->name }}</p>
                        <p style="font-size: 10px">{{ explode(' ',$video->created_at)[0] }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
