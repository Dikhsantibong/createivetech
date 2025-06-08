@extends('layouts.pricing')

@section('title', 'UMKM Package Pricing')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Paket Khusus UMKM</h2>
        <p>Solusi digital terjangkau untuk membantu UMKM Go Digital dengan layanan yang komprehensif</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket khusus yang dirancang untuk kebutuhan UMKM dengan harga terjangkau</p>
    </div>

    <div class="row gy-4 justify-content-center">
      
      <!-- Starter UMKM Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card text-center">
          <h3>UMKM Starter</h3>
          <div class="price">Rp 2.500.000</div>
          <p>Paket dasar untuk memulai digitalisasi UMKM</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Website Landing Page</li>
            <li><i class="bi bi-check-circle"></i> Logo Design (2 Konsep)</li>
            <li><i class="bi bi-check-circle"></i> Business Card Design</li>
            <li><i class="bi bi-check-circle"></i> Social Media Setup</li>
            <li><i class="bi bi-check-circle"></i> WhatsApp Business Setup</li>
            <li><i class="bi bi-check-circle"></i> Basic SEO Setup</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20UMKM%20Starter" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Growth UMKM Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card text-center">
          <h3>UMKM Growth</h3>
          <div class="price">Rp 5.000.000</div>
          <p>Paket lengkap untuk pengembangan bisnis UMKM</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> E-Commerce Website</li>
            <li><i class="bi bi-check-circle"></i> Full Brand Identity</li>
            <li><i class="bi bi-check-circle"></i> Social Media Management</li>
            <li><i class="bi bi-check-circle"></i> Digital Marketing Setup</li>
            <li><i class="bi bi-check-circle"></i> Product Photography</li>
            <li><i class="bi bi-check-circle"></i> Basic Training</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20UMKM%20Growth" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Scale UMKM Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card text-center">
          <h3>UMKM Scale</h3>
          <div class="price">Rp 7.500.000</div>
          <p>Solusi lengkap untuk scaling bisnis UMKM</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Custom E-Commerce System</li>
            <li><i class="bi bi-check-circle"></i> Advanced Digital Marketing</li>
            <li><i class="bi bi-check-circle"></i> Business Automation</li>
            <li><i class="bi bi-check-circle"></i> Marketing Video/Animation</li>
            <li><i class="bi bi-check-circle"></i> Full Digital Training</li>
            <li><i class="bi bi-check-circle"></i> 3 Bulan Maintenance</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20UMKM%20Scale" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

    </div>

    <!-- Additional Info -->
    <div class="additional-info">
      <div class="row">
        <div class="col-lg-6">
          <h4>Keunggulan Paket UMKM Kami</h4>
          <ul>
            <li>Harga terjangkau untuk UMKM</li>
            <li>Solusi digital yang komprehensif</li>
            <li>Pendampingan teknis</li>
            <li>Pelatihan penggunaan sistem</li>
            <li>Konsultasi bisnis gratis</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4>Dukungan Yang Kami Berikan</h4>
          <ul>
            <li>Panduan digitalisasi bisnis</li>
            <li>Strategi marketing online</li>
            <li>Optimasi media sosial</li>
            <li>Integrasi marketplace</li>
            <li>Support teknis berkelanjutan</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 