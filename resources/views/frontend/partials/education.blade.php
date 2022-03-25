@if(!$education->isEmpty())
<!-- education -->
<section class="section position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Education</h2>
        </div>
        @foreach ($education as $edu)
            <div class="col-lg-6 col-md-6 mb-80">
                <div class="d-flex">
                <div class="mr-lg-5 mr-3">
                    <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
                </div>
                <div>
                    <p class="text-dark mb-1">{{ $edu->year->format('M Y') }}</p>
                    <h4>{{ $edu->title }}</h4>
                    <p class="mb-0 text-light">{{ $edu->location }}</p>
                </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
    <!-- bg image -->
    <img class="img-fluid edu-bg-image w-100" src="{{ asset('frontend/images/backgrounds/education-bg.png') }}" alt="bg-image">
  </section>
  <!-- /education -->
@endif
