@if(!$teamMembers->isEmpty() && $sectionsSettings->team_members)
<!-- team -->
<section class="section bg-cover" data-background="{{ asset('frontend/images/backgrounds/team-bg.png') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">My Team</h2>
        </div>
        @foreach ($teamMembers as $member)
            <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
                <div class="card text-center">
                    <img src="{{ $member->getFirstMediaUrl('team.avatar','optimized') }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">{{ $member->name }}</h4>
                        <p class="text-light font-secondary">{{ $member->position }}</p>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- /team -->
@endif
