@if(!$skills->isEmpty())
<!-- skills -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Skills</h2>
        </div>
        @foreach ($skills as $skill)
            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="card shadow text-center">
                    <div class="position-relative rounded-top progress-wrapper" data-color="{{ $skill->color }}">
                    <div class="wave" data-progress="{{$skill->experience_level}}%"></div>
                </div>
                <div class="card-footer bg-white">
                    <h4 class="card-title">{{$skill->title}} ({{$skill->experience_level}}%)</h4>
                </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- /skills -->
@endif
