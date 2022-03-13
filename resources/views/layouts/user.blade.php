

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Hiring Services</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/') }}user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/') }}user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}user/assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="{{ asset('/') }}user/assets/css/animated.css">
    <link rel="stylesheet" href="{{ asset('/') }}user/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('/') }}user/custom.css">
    @stack('css')
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('layouts.partial.user.header')
  <!-- ***** Header Area End ***** -->

  @yield('content')


  @include('layouts.partial.user.footer')


  <!-- Scripts -->
  <script src="{{ asset('/') }}user/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('/') }}user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('/') }}user/assets/js/owl-carousel.js"></script>
  <script src="{{ asset('/') }}user/assets/js/animation.js"></script>
  <script src="{{ asset('/') }}user/assets/js/imagesloaded.js"></script>
  <script src="{{ asset('/') }}user/assets/js/custom.js"></script>

</body>

</html>
