@if(!$clients->isEmpty() && $sectionsSettings->clients)
<!-- client logo slider -->
<section class="section pb-0">
  <div class="container">
    <h2 class="text-center my-2">My Clients</h2>
    <div class="client-logo-slider d-flex align-items-center">
        @foreach ($clients as $client)
            <a target="_blank" href="{{ $client->link }}" class="text-center d-block outline-0 p-4">
                <img width="200" title="{{ $client->name }}" loading="lazy" class="d-unset img-fluid" src="{{ $client->getFirstMediaUrl('client_logo','optimized') }}" alt="{{ $client->name }}">
            </a>
        @endforeach
    </div>
  </div>
</section>
<!-- /client logo slider -->
@endif
