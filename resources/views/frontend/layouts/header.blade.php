
<header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3" href="/"><img width="75" src="{{ $generalSettings->site_logo }}" alt="Site Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          @if($sectionsSettings->blog)
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
