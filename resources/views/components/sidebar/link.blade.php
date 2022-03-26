@props(['name','icon'=>'','url'])
<li class="nav-item">
    <a href="{{ $url }}" class="nav-link @if(request()->fullUrl() === $url) active @endif">
        @if($icon !== '')
            @if(preg_match("/<[^<]+>/",$icon,$m) != 0)
                {!! $icon !!}
            @else
                <i class="{{ $icon }}"></i>
            @endif
        @endif
        <span>{{ $name }}</span>
    </a>
</li>
