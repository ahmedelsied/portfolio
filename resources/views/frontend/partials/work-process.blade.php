@if(!$workProcesses->isEmpty())
<!-- Work Process -->
<section class="section">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Work Process</h2>
        </div>
        @foreach ($workProcesses as $process)
            <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
                <div>
                    <img src="{{ $process->getFirstMediaUrl('work_process.image','optimized') }}" class="mb-4" alt="icon">
                    <h4 class="mb-4">{{ $process->title }}</h4>
                    <p>{{ $process->description }}</p>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- ./Work Process -->
@endif
