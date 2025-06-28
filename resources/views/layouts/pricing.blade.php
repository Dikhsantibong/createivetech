<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title') - CreativeTech</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/logo.png" rel="icon">
  <link href="assets/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css?v=' . time()) }}" rel="stylesheet">
 


  <!-- Additional Pricing Styles -->
  <style>
    .hero-pricing {
      width: 100%;
      position: relative;
      min-height: 60vh;
      padding: 160px 0 80px 0;
      background: var(--primary-color);
      background-image: url("{{ asset('assets/img/hero-bg.png') }}");
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .hero-pricing:before {
      content: "";
      background: rgba(27, 47, 69, 0.8);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    .hero-pricing h2 {
      margin: 0;
      font-size: 48px;
      font-weight: 700;
      color: #fff;
      font-family: var(--font-secondary);
    }

    .hero-pricing p {
      color: rgba(255, 255, 255, 0.8);
      margin: 10px 0 0 0;
      font-size: 20px;
      font-weight: 400;
    }

    .pricing-card {
      background: #fff;
      border: none;
      border-radius: 15px;
      padding: 40px 30px;
      margin-bottom: 30px;
      box-shadow: 0 5px 25px rgba(0,0,0,0.1);
      transition: all 0.5s ease;
      position: relative;
      overflow: hidden;
    }
    
    .pricing-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }

    .pricing-card:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--primary-color);
      opacity: 0;
      transition: all 0.3s ease;
    }

    .pricing-card:hover:before {
      opacity: 1;
    }
    
    .pricing-card h3 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 25px;
      color: var(--primary-color);
    }
    
    .pricing-card .price {
      font-size: 3rem;
      font-weight: 800;
      color: #2b2b2b;
      margin: 25px 0;
      font-family: var(--font-primary);
    }

    .pricing-card .price small {
      font-size: 1rem;
      font-weight: 400;
      color: #6c757d;
    }
    
    .pricing-card .features {
      list-style: none;
      padding: 0;
      margin: 30px 0;
    }
    
    .pricing-card .features li {
      padding: 15px 0;
      border-bottom: 1px solid #eee;
      color: #555;
      font-size: 16px;
    }
    
    .pricing-card .features li i {
      color: var(--primary-color);
      margin-right: 8px;
      font-size: 18px;
    }
    
    .pricing-card .btn-pricing {
      background: var(--primary-color);
      color: white;
      padding: 12px 35px;
      border-radius: 50px;
      text-decoration: none;
      transition: all 0.5s ease;
      display: inline-block;
      margin-top: 20px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    
    .pricing-card .btn-pricing:hover {
      background: var(--primary-dark-color);
      transform: scale(1.05);
    }

    .additional-info {
      background: #f8f9fa;
      border-radius: 15px;
      padding: 40px;
      margin-top: 60px;
    }

    .additional-info h4 {
      color: var(--primary-color);
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .additional-info ul {
      list-style: none;
      padding: 0;
    }

    .additional-info ul li {
      padding: 10px 0;
      color: #555;
      font-size: 16px;
      display: flex;
      align-items: center;
    }

    .additional-info ul li:before {
      content: "\F633";
      font-family: bootstrap-icons;
      color: var(--primary-color);
      margin-right: 10px;
      font-size: 18px;
    }

    .pricing-section {
      padding: 80px 0;
      position: relative;
      z-index: 1;
    }

    .pricing-section:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 50%;
      background: var(--primary-color);
      opacity: 0.03;
      z-index: -1;
    }

    .pricing-header {
      text-align: center;
      margin-bottom: 60px;
    }

    .pricing-header h3 {
      font-size: 36px;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 20px;
    }

    .pricing-header p {
      color: #6c757d;
      font-size: 18px;
      max-width: 600px;
      margin: 0 auto;
    }

    @media (max-width: 768px) {
      .hero-pricing {
        min-height: 50vh;
        padding: 120px 0 60px 0;
      }

      .hero-pricing h2 {
        font-size: 36px;
      }

      .hero-pricing p {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>

  <!-- Header -->
  @include('components.navbar')

  <main id="main">
    @yield('content')
  </main>

  @include('components.Footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html> 