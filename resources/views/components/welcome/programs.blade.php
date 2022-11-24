<div class="container px-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-center my-4">
            <p class="fs-4">We use</p>
        </div>
        @php
            $programs = ['premiere-pro','photoshop','illustrator','after-effects','dimension','adobe'];
        @endphp
        @foreach($programs as $program)
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="d-flex flex-row mb-3"><img src="{{ asset('images/icons/'. $program .'.png') }}" width="70" alt="">
                        <div class="d-flex flex-column ms-2"><span>{{ ucfirst($program) }}</span><span class="text-black-50">Payment Services</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                    </div>
                    <h6>Get more context on your users with stripe data inside our platform.</h6>
                    <div class="d-flex justify-content-between install mt-3"><span>Installed 172 times</span><a href="https://www.adobe.com/" class="text-hover"><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></a></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
