
<!-- footer -->
<footer class="bg-dark footer-section">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 class="text-light">Email</h5>
            <p class="text-white paragraph-lg font-secondary"><a class="clickable-a" href="mailto:{{ $contactInfoSettings->email }}">{{ $contactInfoSettings->email }}</a></p>
          </div>
          @if(!is_null($contactInfoSettings->phone))
          <div class="col-md-4">
            <h5 class="text-light">Phone</h5>
            <p class="text-white paragraph-lg font-secondary"><a class="clickable-a" href="tel:{{ $contactInfoSettings->phone }}">{{ $contactInfoSettings->phone }}</a></p>
          </div>
          @endif
          @if(!is_null($contactInfoSettings->address))
          <div class="col-md-4">
            <h5 class="text-light">Address</h5>
            <p class="text-white paragraph-lg font-secondary">{{ $contactInfoSettings->address }}</p>
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="border-top text-center border-dark py-5">
      <p class="mb-0 text-light">Copyright &copy;{{date('Y')}} Developed by <a style="color: #7746ef !important;font-weight: bold;" target="_blank" class="text-white-50" href="https://www.linkedin.com/in/dev-ahmed-elsied/">Ahmed Elsayed</a></p>
    </div>
  </footer>
  <!-- /footer -->
