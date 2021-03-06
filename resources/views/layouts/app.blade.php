<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <title>{{ config('app.name') }} - {{ $title }} </title>

  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/romaric-icon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bikin - v2.1.0
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>
<body>

  <main id="main">
    
    <div style="background-image: url('assets/img/hero-img.png');" data-aos-delay="150">

      @include('layouts.partials.nav')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

          <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">

            @yield('index')
            
          </div>

        </section><!-- End Hero -->

      @if( Session::has('notification.message') )
        <div class="alert alert-{{ Session::get('notification.type') }} flash">
          <i class="icofont-ui-text-chat"></i> 
          {{ Session::get('notification.message') }}
        </div>
      @endif

      @yield('content')

    </div>

  </main>

  @include('/layouts.partials._footer')

</body>
</html>