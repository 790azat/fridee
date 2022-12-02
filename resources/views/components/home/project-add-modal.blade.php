<div class="modal fade" id="addProjectModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="col-12 p-4">
                <form action="/add-video" method="post" enctype="multipart/form-data" class="d-flex flex-wrap gap-2">
                    @csrf
                    <div class="col-12 d-flex justify-content-center align-items-center gap-2">
                        <div style="width: 160px">
                            <img src="{{ asset('images/video-upload.png') }}" style="width: 100%;height: 100%;object-fit: cover"/>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-center gap-2">
                        <input type="text" name="name" class="col form-control" placeholder="Name">
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-center gap-2">
                        <input type="text" name="link" class="col form-control" placeholder="Link">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
