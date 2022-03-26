@extends('frontend.layout')
@section('content')
    @include('frontend.partials.page-header',['heading' => 'Portfolio'])
    @if(!$portfolio->isEmpty())
        <!-- portfolio -->
        <section class="section">
            <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
                    <label class="btn btn-sm btn-primary active">
                    <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                    </label>
                    @foreach ($categories as $category)
                        <label class="btn btn-sm btn-primary">
                            <input type="radio" name="shuffle-filter" value="{{ $category->title }}" />{{ $category->title }}
                        </label>
                    @endforeach
                </div>
                </div>
            </div>
            <div class="row shuffle-wrapper">
                @foreach ($portfolio as $work)
                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;{{$work->category->title}}&quot;]">
                    <div class="position-relative rounded hover-wrapper">
                    <img src="{{ $work->getFirstMediaUrl('work','optimized') }}" alt="{{ $work->title }}" class="img-fluid rounded w-100 d-block">
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
    @include('frontend.partials.clients')
    @include('frontend.partials.contact')
@endsection
