<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Creative Tech - Digital Agency</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="web development, mobile development, IT consulting, social media management, graphic design, video editing">
  <meta name="description" content="Creative Tech is a digital agency that provides web and mobile application development, IT consulting, social media management, graphic design, and video editing services.">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('landing-page/img/logo-web.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('landing-page/img/logo-web.png') }}" style="size: 20px">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="{{ asset('landing-page/lib/bootstrap/css/bootstrap.min.css') }}">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="{{ asset('landing-page/lib/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/animate/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/owlcarousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/magnific-popup/magnific-popup.css') }}">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ asset('landing-page/css/style.css') }}">

</head>

<body id="body">
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
@include('navbar')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-content">
      <h2>Building Your <span>Digital</span> Future!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
