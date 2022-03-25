@include('frontend.partials.success-modal');
<!-- contact -->
<section class="section section-on-footer" data-background="{{ asset('frontend/images/backgrounds/bg-dots.png') }}">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Contact Info</h2>
        </div>
        <div class="col-lg-8 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">
            <h4 class="mb-80">Contact Form</h4>
            <form action="{{ route('contact') }}" method="POST" class="row">
            @csrf
              <div class="col-md-6">
                <input type="text" id="name" value="{{ old('full_name') }}" name="full_name" placeholder="Full Name" class="form-control px-0 mb-4 @error('full_name') border-danger @enderror" required>
                @error('full_name') <p class="text-danger my-3 text-left">{{ $message }}</p> @enderror
              </div>
              <div class="col-md-6">
                <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Email Address" class="form-control px-0 mb-4 @error('email') border-danger @enderror" required>
                @error('email') <p class="text-danger my-3 text-left">{{ $message }}</p> @enderror
              </div>
              <div class="col-12">
                <textarea name="body" maxlength="400" id="message" class="form-control px-0 mb-4  @error('body') border-danger @enderror"
                  placeholder="Type Message Here" required>{{ old('body') }}</textarea>
                @error('body') <p class="text-danger my-3 text-left">{{ $message }}</p> @enderror
              </div>
              <div class="col-lg-6 col-10 mx-auto">
                <button class="btn btn-primary w-100">send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->
