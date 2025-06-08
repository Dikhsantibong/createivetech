@extends('layouts.pricing')

@section('title', 'Animasi 2D/3D Pricing')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Layanan Animasi 2D/3D</h2>
        <p>Wujudkan ide kreatif Anda dalam bentuk animasi yang menarik dan profesional dengan teknologi terkini</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket animasi yang dapat disesuaikan dengan kebutuhan proyek Anda</p>
    </div>

    <div class="row gy-4 justify-content-center">
      
      <!-- Basic Animation Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card text-center">
          <h3>Basic Animation</h3>
          <div class="price">Rp 3.500.000</div>
          <p>Paket animasi dasar untuk konten sederhana</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Animasi 2D (30 detik)</li>
            <li><i class="bi bi-check-circle"></i> 2x Revisi</li>
            <li><i class="bi bi-check-circle"></i> Background Music</li>
            <li><i class="bi bi-check-circle"></i> Basic Motion Graphics</li>
            <li><i class="bi bi-check-circle"></i> Format MP4 HD</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 7 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Basic%20Animation" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Professional Animation Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card text-center">
          <h3>Professional Animation</h3>
          <div class="price">Rp 7.500.000</div>
          <p>Animasi profesional untuk konten marketing</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Animasi 2D/3D (60 detik)</li>
            <li><i class="bi bi-check-circle"></i> 4x Revisi</li>
            <li><i class="bi bi-check-circle"></i> Custom Sound Design</li>
            <li><i class="bi bi-check-circle"></i> Character Animation</li>
            <li><i class="bi bi-check-circle"></i> Voice Over Profesional</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 14 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Professional%20Animation" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Premium Animation Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card text-center">
          <h3>Premium Animation</h3>
          <div class="price">Rp 15.000.000</div>
          <p>Solusi animasi premium untuk proyek besar</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Animasi 3D Full HD (120 detik)</li>
            <li><i class="bi bi-check-circle"></i> Unlimited Revisi</li>
            <li><i class="bi bi-check-circle"></i> Custom Character Design</li>
            <li><i class="bi bi-check-circle"></i> Advanced Visual Effects</li>
            <li><i class="bi bi-check-circle"></i> Multiple Format Output</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 30 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Premium%20Animation" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

    </div>

    <!-- Additional Info -->
    <div class="additional-info">
      <div class="row">
        <div class="col-lg-6">
          <h4>Keunggulan Layanan Animasi Kami</h4>
          <ul>
            <li>Tim animator profesional dan berpengalaman</li>
            <li>Software dan teknologi animasi terkini</li>
            <li>Proses pengerjaan yang terstruktur</li>
            <li>Hasil render berkualitas tinggi</li>
            <li>Konsultasi konsep gratis</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4>Software & Tools Yang Kami Gunakan</h4>
          <ul>
            <li>Adobe After Effects untuk Motion Graphics</li>
            <li>Blender & Maya untuk Animasi 3D</li>
            <li>Adobe Animate untuk Animasi 2D</li>
            <li>Cinema 4D untuk Visual Effects</li>
            <li>Adobe Audition untuk Sound Design</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 