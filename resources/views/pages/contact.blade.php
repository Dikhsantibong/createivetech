@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <img src="{{ asset('assets/img/hero-bg.png') }}" alt="" data-aos="fade-in">
  <div class="container">
    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-8 col-lg-10">
        <h2>Contact Us<span>.</span></h2>
        <p class="hero-quote">"Let's discuss how we can help bring your vision to life."</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Get in Touch</h2>
    <p>We're Here to Help</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>BTN Unhalu Blok L No 10, Kota Kendari</p>
              <p>Sulawesi Tenggara, Indonesia</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+62 822-9311-8410</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>ctechcreativetech@gmail.com</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-clock"></i>
              <h3>Open 24 Hours</h3>
              <p>Selalu terbuka</p>
              <p>Kapanpun kau mau</p>
            </div>
          </div>
          
        </div>
      </div>

      <div class="col-lg-6">
        <form action="{{ route('contact.submit') }}" method="post" class="contact-form">
          @csrf
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>

            <div class="col-md-12">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </div>
        </form>
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

  .contact .info-item {
    background: #f4f4f4;
    padding: 30px;
    height: 100%;
    border-radius: 10px;
  }

  .contact .info-item i {
    font-size: 38px;
    line-height: 0;
    color: var(--primary-color);
  }

  .contact .info-item h3 {
    font-size: 20px;
    font-weight: 700;
    margin: 20px 0 10px 0;
  }

  .contact .info-item p {
    padding: 0;
    line-height: 24px;
    font-size: 14px;
    margin-bottom: 0;
  }

  .contact .contact-form {
    background: #f4f4f4;
    padding: 30px;
    height: 100%;
    border-radius: 10px;
  }

  .contact .contact-form .form-control {
    border-radius: 5px;
    padding: 12px 15px;
    border: none;
    margin-bottom: 10px;
    font-size: 14px;
  }

  .contact .contact-form textarea.form-control {
    resize: none;
  }

  .contact .contact-form button[type="submit"] {
    background: var(--primary-color);
    border: 0;
    padding: 12px 40px;
    color: #fff;
    transition: 0.4s;
    border-radius: 5px;
  }

  .contact .contact-form button[type="submit"]:hover {
    background: var(--primary-color-dark);
  }
</style>
@endsection 