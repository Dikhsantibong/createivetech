@extends('layouts.pricing')

@section('title', 'Web & Mobile Apps Pricing')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Web & Mobile Apps Development</h2>
        <p>Solusi digital terbaik untuk mengembangkan bisnis Anda ke level berikutnya dengan website dan aplikasi mobile yang profesional</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket layanan yang dapat disesuaikan dengan kebutuhan dan budget Anda</p>
    </div>

    <div class="row gy-4 justify-content-center">
      
      <!-- Basic Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card text-center">
          <h3>Basic</h3>
          <div class="price">Rp 5.000.000</div>
          <p>Cocok untuk bisnis kecil atau personal website</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Website Statis 5-7 Halaman</li>
            <li><i class="bi bi-check-circle"></i> Desain Responsif</li>
            <li><i class="bi bi-check-circle"></i> Form Kontak</li>
            <li><i class="bi bi-check-circle"></i> Integrasi Media Sosial</li>
            <li><i class="bi bi-check-circle"></i> Optimasi SEO Dasar</li>
            <li><i class="bi bi-check-circle"></i> 1 Bulan Support</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Basic%20Web%20Development" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Professional Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card text-center">
          <h3>Professional</h3>
          <div class="price">Rp 10.000.000</div>
          <p>Ideal untuk bisnis menengah dengan fitur lengkap</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Website Dinamis 10-15 Halaman</li>
            <li><i class="bi bi-check-circle"></i> Custom Admin Panel</li>
            <li><i class="bi bi-check-circle"></i> Blog System</li>
            <li><i class="bi bi-check-circle"></i> Optimasi SEO Advanced</li>
            <li><i class="bi bi-check-circle"></i> Integrasi Payment Gateway</li>
            <li><i class="bi bi-check-circle"></i> 3 Bulan Support</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Professional%20Web%20Development" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Enterprise Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card text-center">
          <h3>Enterprise</h3>
          <div class="price">Rp 25.000.000</div>
          <p>Solusi lengkap untuk perusahaan besar</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Website & Mobile App Custom</li>
            <li><i class="bi bi-check-circle"></i> Sistem ERP/CRM</li>
            <li><i class="bi bi-check-circle"></i> API Integration</li>
            <li><i class="bi bi-check-circle"></i> Advanced Security Features</li>
            <li><i class="bi bi-check-circle"></i> Performance Optimization</li>
            <li><i class="bi bi-check-circle"></i> 6 Bulan Support</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Enterprise%20Web%20Development" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

    </div>

    <!-- Additional Info -->
    <div class="additional-info">
      <div class="row">
        <div class="col-lg-6">
          <h4>Keunggulan Layanan Kami</h4>
          <ul>
            <li>Konsultasi gratis sebelum memulai proyek</li>
            <li>Tim developer berpengalaman</li>
            <li>Teknologi terkini dan best practices</li>
            <li>Support dan maintenance profesional</li>
            <li>Jaminan keamanan data</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4>Teknologi Yang Kami Gunakan</h4>
          <ul>
            <li>React.js & Next.js untuk Frontend</li>
            <li>Laravel & Node.js untuk Backend</li>
            <li>React Native untuk Mobile Apps</li>
            <li>AWS & Google Cloud Platform</li>
            <li>Database SQL & NoSQL</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 