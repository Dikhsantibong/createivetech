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

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('landing-page/img/about.png') }}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Creative Tec</h2>
            <h3>Kami adalah perusahaan yang bergerak di bidang teknologi informasi (IT) dengan fokus utama pada pengembangan solusi digital inovatif untuk berbagai industri. Kami menyediakan berbagai layanan, termasuk pengembangan perangkat lunak kustom, aplikasi mobile.</h3>
          </div>
        </div>
      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
@include('service')
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Clients</h2>
          <p>We are proud to have worked with various clients from different industries, delivering innovative and effective digital solutions.</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('landing-page/img/clients/client-1.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-2.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-3.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-4.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-5.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-6.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-7.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-8.png') }}" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <!--==========================
  Portfolio Section
===========================-->
@include('portfolio')
    <!--==========================
      Testimonials Section
    ============================-->
   @include('testimonials')
    <!--==========================
      Our Team Section
    ============================-->
@include('ourteam')

    
    <!--==========================
      Contact Section
    ============================-->
    @include('contact')

  </main>

  <!--==========================
    Footer
  ============================-->
  @include('footer')
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('landing-page/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('landing-page/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/sticky/sticky.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('landing-page/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('landing-page/js/main.js')}}"></script>

</body>
</html>
