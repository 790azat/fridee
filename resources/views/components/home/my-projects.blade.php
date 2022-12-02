<div class="col-12 my-4 shadow p-3">
    <div class="row row-cols-1 row-cols-sm-2 row-cls-md-3 row-cols-lg-4 p-0 m-0 d-flex">
        @foreach($videos as $video)
            <div class="col mb-3 pe-1 pb-0 d-flex flex-wrap">
                <div class="shadow p-2">
                    <a href="{{ $video->link }}" target="_blank" class="col-12">
                        <img src="{{ $video->image }}" alt="" style="width: 100%;height: 100%;object-fit: cover">
                    </a>
                    <div class="col-12 pt-2 text-center d-flex justify-content-between align-items-center">
                        <p>{{ $video->name }}</p>
                        <p style="font-size: 10px">{{ $video->created_at->diffForHumans() }}</p>
                        <div class="modal fade" id="deleteProjectModal{{$video->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $video->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-5 mx-auto mb-3">
                                            <img src="{{ $video->image }}" alt="" style="width: 100%;height: 100%;object-fit: cover">
                                        </div>
                                        <p>Are you sure you want to delete this video ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"><a href="/delete-video/{{$video->id}}">Delete</a></button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button data-bs-toggle="modal" href="#deleteProjectModal{{$video->id}}" class="btn btn-sm btn-danger py-0 px-2">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
