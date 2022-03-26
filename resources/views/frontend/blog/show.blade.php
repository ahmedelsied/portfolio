@extends('frontend.layout')
@section('meta-description',$post->description)
@section('content')
    @include('frontend.partials.page-header',['heading' => 'Blog'])
    <section class="section">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h3 class="font-tertiary mb-3">{{ $post->title }}</h3>
            <p class="font-secondary mb-5">Published on {{ $post->created_at->format('M d,Y') }} by <span class="text-primary">{{ $post->writer->name }}</span
                class="text-primary"> on <span>{{ $post->category->title }}</span></p>
            <div class="content">
                <img src="{{ $post->getFirstMediaUrl('blog','optimized') }}" alt="{{ $post->title }}" class="img-fluid rounded float-left mr-5 mb-4">
                {!! $post->body !!}
            </div>
            </div>
        </div>
        </div>
    </section>
    @if(!$similarPosts->isEmpty())
    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Similar Posts</h2>
                </div>
                @foreach ($similarPosts as $post)
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <article class="card shadow">
                            <img class="rounded card-img-top" src="{{ $post->getFirstMediaUrl('blog','optimized') }}" alt="post-thumb" loading="lazy">
                            <div class="card-body">
                            <h4 class="card-title"><a class="text-dark" href="{{ route('blog.show',$post->id) }}">{{ $post->title }}</a>
                            </h4>
                            <p class="cars-text">{{ $post->description }}</p>
                            <a href="{{ route('blog.show',$post->id) }}" class="btn btn-xs btn-primary">Read More</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /blog -->
    @endif
    @include('frontend.partials.clients')
    @include('frontend.partials.contact')
@endsection
