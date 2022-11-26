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
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('storage/users-avatar/' . $t->avatar) }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">{{$t->name}}</h5><span class="small text-uppercase text-muted">{{$t->role}}</span>
                        <ul class="social mb-0 list-inline mt-3 d-flex flex-nowrap justify-content-center">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>
