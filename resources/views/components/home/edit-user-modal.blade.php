<div class="modal fade" id="editProfileModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="col-12 p-4">
                <form action="/edit-profile" method="post" enctype="multipart/form-data" class="d-flex flex-wrap gap-2">
                    @csrf
                    <div class="col-12 d-flex flex-wrap justify-content-center gap-2">
                        <div class="col-12 d-flex justify-content-center align-items-center gap-2">
                            <div style="width: 100px;height: 100px">
                                <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}" id="frame" class="rounded-circle shadow-sm" style="width: 100%;height: 100%;object-fit: cover"/>
                            </div>
                            <div class="">
                                <div class="btn btn-primary" onclick="getFile()"><i class="fa-solid fa-upload me-1"></i> Upload</div>
                            </div>
                        </div>
                        <label>Name
                            <input type="text" name="name" class="col form-control" placeholder="Name" value="{{Auth::user()->name}}">
                        </label>
                        <label class="col">Surname
                            <input type="text" name="surname" class="col form-control" placeholder="Surname" value="{{Auth::user()->surname}}">
                        </label>
                    </div>
                    <div class="col-12 d-flex justify-content-center gap-2">
                        <label class="col">Email
                            <input type="email" name="email" class="col form-control" placeholder="Email" value="{{Auth::user()->email}}">
                        </label>
                        <label class="col">Role
                            <select class="form-select" name="role">
                                <option value=""></option>
                                <option value="Video-editor" @if(Auth::user()->role == 'Video-editor') selected @endif>Video-editor</option>
                                <option value="Graphic designer" @if(Auth::user()->role == 'Graphic designer') selected @endif>Graphic designer</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-12 d-flex justify-content-center gap-2">
                        <label class="col form-label d-none">Avatar
                            <input accept="image/*" max onchange="preview()" class="form-control h-auto form-control-md" name="avatar" id="avatar" type="file">
                        </label>
                        <script>
                            function getFile(){
                                document.getElementById("avatar").click();
                            }
                            function preview() {
                                frame.src=URL.createObjectURL(event.target.files[0]);
                            }
                        </script>
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-center gap-2">
                        <div class="col-12">
                            <input type="tel" name="phone" class="col form-control" placeholder="Phone" value="@isset(json_decode(Auth::user()->social)->phone) {{json_decode(Auth::user()->social)->phone}} @endisset">
                        </div>
                        <div class="col-12">
                            <input type="text" name="telegram" class="col form-control" placeholder="Telegram" value="@isset(json_decode(Auth::user()->social)->telegram) {{json_decode(Auth::user()->social)->telegram}} @endisset">
                        </div>
                        <div class="col-12">
                            <input type="text" name="facebook" class="col form-control" placeholder="Facebook" value="@isset(json_decode(Auth::user()->social)->facebook) {{json_decode(Auth::user()->social)->facebook}} @endisset">
                        </div>
                        <div class="col-12">
                            <input type="text" name="instagram" class="col form-control" placeholder="Instagram" value="@isset(json_decode(Auth::user()->social)->instagram) {{json_decode(Auth::user()->social)->instagram}} @endisset">
                        </div>
                        <div class="col-12">
                            <input type="text" name="linkedin" class="col form-control" placeholder="Linkedin" value="@isset(json_decode(Auth::user()->social)->linkedin) {{json_decode(Auth::user()->social)->linkedin}} @endisset">
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
