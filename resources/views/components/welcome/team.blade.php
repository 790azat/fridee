<div class="team-body" id="team-anchor">
    <!-- For demo purpose -->
    <div class="container py-5">
        <div class="row text-center text-white">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4">Our team</h1>
                <p class="lead mb-0">We have different profession specialists here.</p>
            </div>
        </div>
    </div><!-- End -->


    <div class="container pb-5">
        <div class="row row-cols-sm-3 row-cols-1 justify-content-center d-flex text-center">
                <!-- Team item -->
            @foreach($team as $t)
                <div class="col-10 col-sm mb-3 mb-sm-0">
                    <div class="bg-white rounded shadow-sm py-5 px-4">
                        <div style="width: 100px;height: 100px" class="mx-auto mb-3">
                            <img src="{{ asset('storage/users-avatar/' . $t->avatar) }}" alt="" style="width: 100%;height: 100%;object-fit: cover" class="img-fluid rounded-circle img-thumbnail shadow-sm">
                        </div>
                        <h5 class="mb-0">{{$t->name}}</h5><span class="small text-uppercase text-muted">{{$t->role}}</span>
                        <ul class="social mb-0 list-inline mt-3 d-flex flex-nowrap justify-content-center">
                            @foreach(json_decode($t->social) as $key => $social)
                                @if($social != null)
                                    <li class="list-inline-item"><a href="@if($key == 'phone') tel:{{$social}} @else {{$social}} @endif" target="_blank" class="social-link"><i class=" @if($key == 'phone') fa-solid fa-phone @else fa-brands fa-{{$key}} @endif"></i></a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>
