@if(!$testimonials->isEmpty() && $sectionsSettings->testimonials)
<!-- testimonial -->
<section class="section bg-primary position-relative testimonial-bg-shapes">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title text-white mb-5">Testimonials</h2>
        </div>
        <div class="col-lg-10 mx-auto testimonial-slider">
          <!-- slider-item -->
          @foreach ($testimonials as $testimonial)
            <div class="text-center testimonial-content">
                <p class="text-white mb-4">{{ $testimonial->review }}</p>
                <img width="150" class="img-fluid rounded-circle mb-4 d-inline-block" src="{{ $testimonial->getFirstMediaUrl('client_image','optimized') }}"
                    alt="{{ $testimonial->client_name }}" loading="lazy">
                <h4 class="text-white">{{ $testimonial->client_name }}</h4>
                <h6 class="text-light mb-4">{{ $testimonial->client_position }}</h6>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- bg shapes -->
    <img src="{{ asset('frontend/images/backgrounds/map.png') }}" alt="map" class="img-fluid bg-map">
    <img src="{{ asset('frontend/images/illustrations/dots-group-v.png') }}" alt="bg-shape" class="img-fluid bg-shape-1">
    <img src="{{ asset('frontend/images/illustrations/leaf-orange.png') }}" alt="bg-shape" class="img-fluid bg-shape-2">
    <img src="{{ asset('frontend/images/illustrations/dots-group-sm.png') }}" alt="bg-shape" class="img-fluid bg-shape-3">
    <img src="{{ asset('frontend/images/illustrations/leaf-pink-round.png') }}" alt="bg-shape" class="img-fluid bg-shape-4">
    <img src="{{ asset('frontend/images/illustrations/leaf-cyan.png') }}" alt="bg-shape" class="img-fluid bg-shape-5">
  </section>
  <!-- /testimonial -->
@endif
