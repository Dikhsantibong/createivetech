@extends('layouts.pricing')

@section('title', 'Digital Marketing Pricing')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Layanan Digital Marketing</h2>
        <p>Tingkatkan presence online dan penjualan bisnis Anda dengan strategi digital marketing yang efektif</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket digital marketing yang dapat disesuaikan dengan skala bisnis Anda</p>
    </div>

    <div class="row gy-4 justify-content-center">
      
      <!-- Basic Marketing Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card text-center">
          <h3>Basic Marketing</h3>
          <div class="price">Rp 2.000.000<span>/bulan</span></div>
          <p>Paket dasar untuk UMKM & startup</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Social Media Management (2 Platform)</li>
            <li><i class="bi bi-check-circle"></i> 12 Post/Bulan</li>
            <li><i class="bi bi-check-circle"></i> Basic Content Strategy</li>
            <li><i class="bi bi-check-circle"></i> Community Management</li>
            <li><i class="bi bi-check-circle"></i> Monthly Report</li>
            <li><i class="bi bi-check-circle"></i> Basic Analytics</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Basic%20Marketing" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Professional Marketing Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card text-center">
          <h3>Professional Marketing</h3>
          <div class="price">Rp 5.000.000<span>/bulan</span></div>
          <p>Solusi lengkap untuk bisnis berkembang</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Social Media Management (4 Platform)</li>
            <li><i class="bi bi-check-circle"></i> 20 Post/Bulan</li>
            <li><i class="bi bi-check-circle"></i> Advanced Content Strategy</li>
            <li><i class="bi bi-check-circle"></i> Paid Advertising Management</li>
            <li><i class="bi bi-check-circle"></i> SEO Optimization</li>
            <li><i class="bi bi-check-circle"></i> Detailed Analytics & Report</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Professional%20Marketing" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Premium Marketing Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card text-center">
          <h3>Premium Marketing</h3>
          <div class="price">Rp 8.000.000<span>/bulan</span></div>
          <p>Solusi premium untuk perusahaan besar</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Full Social Media Management</li>
            <li><i class="bi bi-check-circle"></i> 30 Post/Bulan</li>
            <li><i class="bi bi-check-circle"></i> Premium Content Creation</li>
            <li><i class="bi bi-check-circle"></i> Advanced Marketing Strategy</li>
            <li><i class="bi bi-check-circle"></i> Complete Digital Solutions</li>
            <li><i class="bi bi-check-circle"></i> Priority Support 24/7</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Premium%20Marketing" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

    </div>

    <!-- Additional Info -->
    <div class="additional-info">
      <div class="row">
        <div class="col-lg-6">
          <h4>Keunggulan Digital Marketing Kami</h4>
          <ul>
            <li>Tim marketing berpengalaman</li>
            <li>Strategi yang terukur dan terarah</li>
            <li>Laporan performa berkala</li>
            <li>Optimasi konten berkelanjutan</li>
            <li>Konsultasi strategi gratis</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4>Platform & Tools Yang Kami Gunakan</h4>
          <ul>
            <li>Meta Business Suite</li>
            <li>Google Ads & Analytics</li>
            <li>SEMrush untuk SEO</li>
            <li>Hootsuite untuk Social Media</li>
            <li>Mailchimp untuk Email Marketing</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 