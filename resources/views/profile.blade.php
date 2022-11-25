@extends('layout')

@section('content')
    <div class="container">
        @include('components.home.menu')
        <div class="col-12 d-flex flex-wrap flex-sm-nowrap gap-3 mb-4">
            <div class="col-12 col-sm-auto rounded-3 overflow-hidden shadow-sm">
                <div class="col-12 d-flex flex-column p-3 px-4 pb-0 flex-wrap" style="background: linear-gradient(to top,#f8fafc 32%,#0ea0e3 0,#00d0ff);">
                    <div class="col-12">
                        <p class="text-center text-light fw-bold fs-5">{{ $profile->name }}</p>
                    </div>
                    <div class="col-12 mt-2 d-flex justify-content-center">
                        <p class="text-center rounded-pill px-2 text-light fw-bold shadow-sm" style="width: fit-content;background: #59e0ff">@if($profile->role == 'Video-editor')<i class="fa-solid fa-film me-1"></i> @endif {{ $profile->role }}</p>
                    </div>
                    <div class="col-12 mt-3 d-flex justify-content-center">
                        <div style="width: 150px;height: 150px;">
                            <img class="rounded-circle border border-4 border-light" src="{{ asset('storage/users-avatar/' . $profile->avatar) }}" style="width: 100%;height: 100%;object-fit: cover" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 my-1">
                    <div class="col-12 d-flex my-3">
                        <div class="col d-flex flex-wrap">
                            <p class="text-center col-12 fw-bold">3</p>
                            <p class="text-center col-12 text-secondary">Jobs</p>
                        </div>
                        <div class="col d-flex flex-wrap">
                            <p class="text-center col-12 fw-bold">2</p>
                            <p class="text-center col-12 text-secondary">Active</p>
                        </div>
                        <div class="col d-flex flex-wrap">
                            <p class="text-center col-12 fw-bold">16</p>
                            <p class="text-center col-12 text-secondary">Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1 mb-4 d-flex justify-content-center">
                    <button class="btn btn-success rounded-pill">
                        <a href="/chatify/{{$profile->id}}">
                            <div>
                                <i class="fa-solid fa-paper-plane me-1"></i> Message
                            </div>
                        </a>
                    </button>
                </div>
            </div>
            <div class="col-12">
                <div class="col-12 row-cols-3 row-cols-sm-6 d-flex flex-wrap align-items-between">
                    <div>
                        <div class="col-11 mb-2 btn btn-light shadow-sm py-2 px-sm-3 px-0 rounded">
                            <a href="" class="text-nowrap text-center d-flex justify-content-center"><p><i class="fa-solid fa-paper-plane me-1"></i> Telegram</p></a>
                        </div>
                    </div>
                    <div>
                        <div class="col-11 mb-2 btn btn-light shadow-sm py-2 px-sm-3 px-0 rounded">
                            <a href="" class="text-nowrap text-center d-flex justify-content-center"><p><i class="fa-brands fa-facebook me-1"></i> Facebook</p></a>
                        </div>
                    </div>
                    <div>
                        <div class="col-11 mb-2 btn btn-light shadow-sm py-2 px-sm-3 px-0 rounded">
                            <a href="" class="text-nowrap text-center d-flex justify-content-center"><p><i class="fa-brands fa-instagram me-1"></i> Instagram</p></a>
                        </div>
                    </div>
                    <div>
                        <div class="col-11 mb-2 btn btn-light shadow-sm py-2 px-sm-3 px-0 rounded">
                            <a href="" class="text-nowrap text-center d-flex justify-content-center"><p><i class="fa-brands fa-linkedin me-1"></i> Linked In</p></a>
                        </div>
                    </div>
                    <div>
                        <div class="col-11 mb-2 btn btn-light shadow-sm py-2 px-sm-3 px-0 rounded">
                            <a href="" class="text-nowrap text-center d-flex justify-content-center"><p><i class="fa-solid fa-envelope me-1"></i> Email</p></a>
                        </div>
                    </div>
                    <div>
                        <div class="col-11 mb-2 btn btn-light shadow-sm py-2 px-sm-3 px-0 rounded">
                            <a href="" class="text-nowrap text-center d-flex justify-content-center"><p><i class="fa-solid fa-phone-flip me-1"></i> Phone</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
