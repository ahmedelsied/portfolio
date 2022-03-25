
<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <h1 class="text-white font-tertiary">{!! $homeSettings->header_text !!}</h1>
        </div>
      </div>
    </div>
    <div class="layer-bg w-100">
      <img class="img-fluid w-100" src="{{ asset('frontend/images/illustrations/leaf-bg.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l2">
      <img src="{{ asset('frontend/images/illustrations/dots-cyan.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l3">
      <img src="{{ asset('frontend/images/illustrations/leaf-orange.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l4">
      <img src="{{ asset('frontend/images/illustrations/dots-orange.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l5">
      <img src="{{ asset('frontend/images/illustrations/leaf-yellow.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l6">
      <img src="{{ asset('frontend/images/illustrations/leaf-cyan.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l7">
      <img src="{{ asset('frontend/images/illustrations/dots-group-orange.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l8">
      <img src="{{ asset('frontend/images/illustrations/leaf-pink-round.png') }}" alt="bg-shape">
    </div>
    <div class="layer" id="l9">
      <img src="{{ asset('frontend/images/illustrations/leaf-cyan-2.png') }}" alt="bg-shape">
    </div>
    <!-- social icon -->
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
        @if(!is_null($socialSettings->facebook))
            <li class="mb-3"><a rel="nofollow" class="text-white" target="_blank" href="{{ $socialSettings->facebook }}"><i class="ti-facebook"></i></a></li>
        @endif
        @if(!is_null($socialSettings->linkedin))
            <li class="mb-3"><a rel="nofollow" class="text-white" target="_blank" href="{{ $socialSettings->linkedin }}"><i class="ti-linkedin"></i></a></li>
        @endif
        @if(!is_null($socialSettings->github))
            <li class="mb-3"><a rel="nofollow" class="text-white" target="_blank" href="{{ $socialSettings->github }}"><i class="ti-github"></i></a></li>
        @endif
        @if(!is_null($socialSettings->behance) && $socialSettings->behance != '')
            <li class="mb-3"><a rel="nofollow" class="text-white" target="_blank" href="{{ $socialSettings->behance }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" fill="white" height="19" viewBox="0 0 24 24"><path d="M22 7h-7v-2h7v2zm1.726 10c-.442 1.297-2.029 3-5.101 3-3.074 0-5.564-1.729-5.564-5.675 0-3.91 2.325-5.92 5.466-5.92 3.082 0 4.964 1.782 5.375 4.426.078.506.109 1.188.095 2.14h-8.027c.13 3.211 3.483 3.312 4.588 2.029h3.168zm-7.686-4h4.965c-.105-1.547-1.136-2.219-2.477-2.219-1.466 0-2.277.768-2.488 2.219zm-9.574 6.988h-6.466v-14.967h6.953c5.476.081 5.58 5.444 2.72 6.906 3.461 1.26 3.577 8.061-3.207 8.061zm-3.466-8.988h3.584c2.508 0 2.906-3-.312-3h-3.272v3zm3.391 3h-3.391v3.016h3.341c3.055 0 2.868-3.016.05-3.016z"/></svg>
            </a></li>
        @endif
    </ul>
    <!-- /social icon -->
  </section>
  <!-- /hero area -->
