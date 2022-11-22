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


    <div class="container">
        <div class="row text-center">

            @php
                $members = [1,2,3,4];
            @endphp
                <!-- Team item -->
            @foreach($members as $member)
                <div class="col-xl-3 col-sm-6 col-10 mx-auto mx-sm-0 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-7.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
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
