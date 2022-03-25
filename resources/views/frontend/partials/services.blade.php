@if(!$services->isEmpty() && $sectionsSettings->services)
<!-- services -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Services</h2>
        </div>
        @foreach ($services as $service)
            <div class="col-md-4 mb-4 mb-md-0">
            <div class="card hover-shadow shadow">
                <div class="card-body text-center px-4 py-5">
                <i class="{{$service->icon}} icon mb-5 d-inline-block"></i>
                <h4 class="mb-4">{{ $service->title }}</h4>
                <p>{{ $service->description }}</p>
                </div>
            </div>
            </div>
        @endforeach
        {{-- <div class="col-md-4 mb-4 mb-md-0">
          <div class="card active-bg-primary hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-vector icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">UX Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  <!-- /services -->
@endif
