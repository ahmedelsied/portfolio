@extends('frontend.layout')
@section('content')
    @include('frontend.partials.page-header',['heading' => 'About Us'])
    <!-- about -->
    <section class="section pt-5 mt-5">
        <div class="container">
        <div class="row">
            <div class="col-md-8">
                {!! $page->body !!}
            </div>
            <div class="col-md-4 text-center drag-lg-top">
            <div class="shadow-down mb-4">
                <img src="{{ $personalSettings->avatar }}" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
            </div>
            <h4>{{ $personalSettings->name }}</h4>
            </div>
        </div>
        </div>
    </section>
    @include('frontend.partials.work-process')
    @include('frontend.partials.team')
    @include('frontend.partials.clients')
    @include('frontend.partials.contact')
@endsection
