<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>{{ $generalSettings->site_title }}</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="@yield('meta-description',$seoSettings->site_description)">
  <meta name="keywords" content="{{$seoSettings->site_keywords}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Ahmed Elsayed">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-png" href="{{ $generalSettings->site_logo }}" />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
  @include('frontend.layouts.styles')

</head>
<body>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')
</body>
</html>
