<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Portfolio Detail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="portfolio, detail, creative tech">
  <meta name="description" content="Detail of the selected portfolio item.">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('landing-page/img/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('landing-page/img/apple-touch-icon.png') }}">

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
  

  <!--==========================
    Portfolio Detail Section
  ============================-->
  <section id="portfolio-detail">
    <div class="container pt-5">
      <div class="section-header">
        <h2>{{ $detail['title'] }}</h2>
        <p>{{ $detail['description'] }}</p>
      </div>
      <div class="row">
        <div class="col-lg-8">
          @if (isset($detail['videos']) && is_array($detail['videos']))
            <!-- Video Carousel for Video Editing -->
            <div id="videoCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner">
                @foreach ($detail['videos'] as $index => $video)
                  <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <iframe width="100%" height="500" src="{{ $video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          @elseif (isset($detail['image']))
            <!-- Image Display for Web Development -->
            <img src="{{ asset($detail['image']) }}" alt="{{ $detail['title'] }}" style="width: 100%; height: auto;">
          @endif
        </div>
        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category:</strong> {{ $detail['title'] }}</li>
              <li><strong>Client:</strong> Example Client</li>
              <li><strong>Project Date:</strong> 01 March, 2023</li>
              <li><strong>Project URL:</strong> <a href="#">www.example.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Halaman utama</a>
      </div>
    </div>
  </section><!-- #portfolio-detail -->
  <!--==========================
    Footer
  ============================-->
  <div style="position: fixed; bottom: 0; width: 100%;">
    @include('footer')
  </div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('landing-page/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('landing-page/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('landing-page/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('landing-page/js/main.js') }}"></script>
</body>
</html>
