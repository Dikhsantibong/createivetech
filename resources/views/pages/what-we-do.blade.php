@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <img src="{{ asset('assets/img/hero-bg.png') }}" alt="" data-aos="fade-in">
  <div class="container">
    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-8 col-lg-10">
        <h2>What We Do<span>.</span></h2>
        <p class="hero-quote">"Transforming ideas into digital reality through innovative solutions and creative excellence."</p>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services</h2>
    <p>Comprehensive Digital Solutions</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-code-square"></i>
          </div>
          <h3>Web & Mobile Development</h3>
          <p>Custom web applications and mobile apps built with modern technologies and best practices. Responsive, secure, and user-friendly solutions for your business.</p>
          <a href="{{ route('pricing.web-apps') }}" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-camera-video"></i>
          </div>
          <h3>2D/3D Animation</h3>
          <p>Engaging animated content for marketing, education, and entertainment. Bringing your stories to life with creative storytelling and professional animation.</p>
          <a href="{{ route('pricing.animation') }}" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-film"></i>
          </div>
          <h3>Video Editing</h3>
          <p>Professional video editing services combining cinematic techniques with cutting-edge technology to create high-impact visual content.</p>
          <a href="{{ route('pricing.video-editing') }}" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-share"></i>
          </div>
          <h3>Digital Marketing</h3>
          <p>Comprehensive digital marketing strategies including SEO, social media management, and email marketing to expand your brand's reach.</p>
          <a href="{{ route('pricing.digital-marketing') }}" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-palette"></i>
          </div>
          <h3>Graphic Design</h3>
          <p>Creative graphic design services for branding, marketing materials, and visual communication that makes your brand stand out.</p>
          <a href="{{ route('pricing.graphic-design') }}" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-gear"></i>
          </div>
          <h3>IT Consulting</h3>
          <p>Expert IT consulting services to help optimize and develop your business's technology infrastructure and digital strategy.</p>
          <a href="#" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('styles')
<style>
  .hero-quote {
    font-size: 1.25rem;
    font-style: italic;
    color: rgba(255, 255, 255, 0.9);
    margin-top: 1.5rem;
    line-height: 1.6;
    font-family: 'Poppins', sans-serif;
  }

  @media (max-width: 768px) {
    .hero-quote {
      font-size: 1.1rem;
    }
  }

  .service-item {
    padding: 40px;
    background: #fff;
    height: 100%;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease-in-out;
  }

  .service-item:hover {
    transform: translateY(-5px);
  }

  .service-item .icon {
    width: 48px;
    height: 48px;
    position: relative;
    margin-bottom: 20px;
  }

  .service-item .icon i {
    color: var(--primary-color);
    font-size: 40px;
    transition: ease-in-out 0.3s;
  }

  .service-item h3 {
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 20px;
    position: relative;
  }

  .service-item p {
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 20px;
  }

  .service-item .readmore {
    margin-top: 15px;
    display: inline-block;
    color: var(--primary-color);
    transition: 0.3s;
    font-weight: 600;
    font-size: 16px;
  }

  .service-item .readmore i {
    margin-left: 5px;
    font-size: 18px;
    transition: 0.3s;
  }

  .service-item .readmore:hover i {
    transform: translateX(5px);
  }
</style>
@endsection 