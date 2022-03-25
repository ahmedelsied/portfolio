@if(!$experiences->isEmpty())
<!-- experience -->
<section class="section">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Experience</h2>
        </div>
        @foreach ($experiences as $experience)
            <div class="col-lg-3 col-md-4 text-center">
            <img loading="lazy" src="{{ asset('frontend/images/experience/icon-'.rand(1, 3).'.png') }}" alt="icon">
            <p class="mb-0">{{$experience->from->format('M Y')}} - {{$experience->to?->format('M Y') ?? 'Present'}}</p>
            <h4>{{$experience->position_title}}</h4>
            <h6 class="text-light">{{$experience->company_name}}</h6>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- ./experience -->
@endif
