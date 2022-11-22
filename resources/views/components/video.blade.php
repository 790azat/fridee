<header>
    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
    </video>
    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white gap-2 d-flex justify-content-center align-self-center flex-wrap">
                <div class="col-2 mx-auto d-flex justify-content-center align-self-center">
                    <img src="{{ asset('logo2.png') }}" style="width: 100%" alt="">
                </div>
                <div class="col-12 px-5">
                    <p class="lead mb-0">We brainstorm, create, and edit videos for content creators and brands on social media.</p>
                </div>
            </div>
        </div>
    </div>
</header>

