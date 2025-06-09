@extends('layouts.pricing')

@section('title', 'Paket UMKM')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Paket UMKM</h2>
        <p>Solusi digital terjangkau untuk mengembangkan bisnis UMKM Anda</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket layanan digital yang dirancang khusus untuk UMKM</p>
    </div>

    <div class="row gy-4 justify-content-center">
      @foreach($packages as $index => $package)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
        <div class="pricing-card text-center {{ $package['is_popular'] ? 'popular' : '' }}">
          @if($package['is_popular'])
            <div class="popular-badge">Popular</div>
          @endif
          <h3>{{ $package['title'] }}</h3>
          <div class="price">Rp {{ $package['price'] }}</div>
          <p>Durasi: {{ $package['duration'] }}</p>
          <ul class="features">
            @foreach($package['features'] as $feature)
              <li><i class="bi bi-check-circle"></i> {{ $feature }}</li>
            @endforeach
          </ul>
          <a href="{{ $package['button_link'] }}" class="btn btn-primary btn-lg w-100" target="_blank">
            <i class="bi bi-whatsapp me-2"></i>{{ $package['button_text'] }}
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section py-5" style="background-color: #f0fff5;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Keuntungan untuk UMKM</h3>
      <p>Manfaat yang akan Anda dapatkan dengan menggunakan layanan kami</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="benefit-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="benefit-icon mb-3">
            <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>
          </div>
          <h5>Peningkatan Penjualan</h5>
          <p class="mb-0">Optimalkan penjualan melalui platform digital</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="benefit-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="benefit-icon mb-3">
            <i class="bi bi-people fs-1 text-primary"></i>
          </div>
          <h5>Jangkauan Lebih Luas</h5>
          <p class="mb-0">Capai lebih banyak pelanggan potensial</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="benefit-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="benefit-icon mb-3">
            <i class="bi bi-shield-check fs-1 text-primary"></i>
          </div>
          <h5>Brand Profesional</h5>
          <p class="mb-0">Tingkatkan kepercayaan pelanggan</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="benefit-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="benefit-icon mb-3">
            <i class="bi bi-currency-dollar fs-1 text-primary"></i>
          </div>
          <h5>Biaya Efektif</h5>
          <p class="mb-0">Harga terjangkau dengan hasil maksimal</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="services-section py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Layanan Digital UMKM</h3>
      <p>Solusi lengkap untuk digitalisasi bisnis Anda</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-shop fs-1"></i>
          </div>
          <h5>Digital Presence</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Website Bisnis</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Social Media Setup</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Google Business Profile</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-megaphone fs-1"></i>
          </div>
          <h5>Digital Marketing</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Social Media Marketing</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Content Creation</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Digital Advertising</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-basket fs-1"></i>
          </div>
          <h5>E-Commerce</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Online Store Setup</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Marketplace Integration</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Product Photography</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features-section py-5" style="background-color: #fff5f0;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Fitur Unggulan</h3>
      <p>Layanan khusus yang kami sediakan untuk UMKM</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-3 col-md-6" data-aos="zoom-in">
        <div class="feature-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-headset fs-1 text-primary mb-2"></i>
          <h6>Konsultasi Gratis</h6>
          <p class="small mb-0">Konsultasi strategi digital untuk bisnis Anda</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="feature-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-calendar-check fs-1 text-primary mb-2"></i>
          <h6>Pelatihan Digital</h6>
          <p class="small mb-0">Panduan penggunaan tools digital</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="feature-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-graph-up fs-1 text-primary mb-2"></i>
          <h6>Laporan Performa</h6>
          <p class="small mb-0">Monitoring dan analisis hasil digital</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="feature-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-tools fs-1 text-primary mb-2"></i>
          <h6>Support Teknis</h6>
          <p class="small mb-0">Bantuan teknis berkelanjutan</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Frequently Asked Questions</h3>
      <p>Pertanyaan yang sering diajukan seputar layanan UMKM</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Berapa lama proses digitalisasi UMKM?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Proses digitalisasi bervariasi tergantung kebutuhan dan skala bisnis. Untuk setup dasar bisa selesai dalam 1-2 minggu, sedangkan untuk solusi yang lebih kompleks bisa memakan waktu 1-2 bulan.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Apakah ada biaya maintenance bulanan?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Biaya maintenance tergantung paket yang dipilih. Beberapa layanan memerlukan biaya bulanan untuk hosting, domain, atau pengelolaan media sosial. Kami akan menjelaskan secara detail sebelum Anda memulai.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Apakah bisa custom sesuai kebutuhan?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Ya, kami menyediakan solusi yang dapat disesuaikan dengan kebutuhan dan budget UMKM Anda. Konsultasikan kebutuhan Anda, dan kami akan memberikan rekomendasi terbaik.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection 