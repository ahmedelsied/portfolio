@extends('frontend.layout')
@section('content')
    @include('frontend.partials.page-header',['heading' => 'Blog'])
    @include('frontend.partials.blog')
    @include('frontend.partials.clients')
    @include('frontend.partials.contact')
@endsection
