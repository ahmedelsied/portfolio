@if(!$portfolio->isEmpty())
<!-- portfolio -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Portfolio</h2>
        </div>
      </div>
      <div class="row @if(!Route::is('home')) shuffle-wrapper @endif">
        @foreach ($portfolio as $work)
            <div class="col-lg-4 col-6 mb-4 @if(!Route::is('home')) shuffle-item @endif">
                <div class="position-relative rounded hover-wrapper">
                    <img src="{{ $work->getFirstMediaUrl('work','optimized') }}" alt="{{ $work->title }}" class="img-fluid rounded w-100" loading="lazy">
                    <div class="hover-overlay">
                        <div class="hover-content">
                            <a class="btn btn-light btn-sm" target="_blank" href="{{ $work->link }}">view project</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- /portfolio -->
@endif
