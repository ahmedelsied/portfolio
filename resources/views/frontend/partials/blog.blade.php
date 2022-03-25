@if(!$blog->isEmpty() && $sectionsSettings->blog)
<!-- blog -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Blogs</h2>
        </div>
        @foreach ($blog as $post)
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <article class="card shadow">
                <img class="rounded card-img-top" src="{{ $post->getFirstMediaUrl('blog','optimized') }}" alt="post-thumb" loading="lazy">
                <div class="card-body">
                    <h4 class="card-title"><a class="text-dark" href="blog-single.html">{{ $post->title }}</a>
                    </h4>
                    <p class="cars-text">{{ $post->description }}</p>
                    <a href="#" class="btn btn-xs btn-primary">Read More</a>
                </div>
                </article>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- /blog -->
@endif
