@extends('layouts.pricing')

@section('title', 'Video Editing Pricing')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Layanan Video Editing</h2>
        <p>Tingkatkan kualitas konten video Anda dengan layanan editing profesional kami</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket video editing yang dapat disesuaikan dengan kebutuhan konten Anda</p>
    </div>

    <div class="row gy-4 justify-content-center">
      
      <!-- Basic Video Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card text-center">
          <h3>Basic Video</h3>
          <div class="price">Rp 1.500.000</div>
          <p>Paket editing dasar untuk konten sederhana</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Durasi Video 3-5 Menit</li>
            <li><i class="bi bi-check-circle"></i> 2x Revisi</li>
            <li><i class="bi bi-check-circle"></i> Basic Color Grading</li>
            <li><i class="bi bi-check-circle"></i> Simple Transitions</li>
            <li><i class="bi bi-check-circle"></i> Background Music</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 3 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Basic%20Video" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Professional Video Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card text-center">
          <h3>Professional Video</h3>
          <div class="price">Rp 3.500.000</div>
          <p>Video editing profesional untuk konten marketing</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Durasi Video 5-10 Menit</li>
            <li><i class="bi bi-check-circle"></i> 4x Revisi</li>
            <li><i class="bi bi-check-circle"></i> Advanced Color Grading</li>
            <li><i class="bi bi-check-circle"></i> Custom Motion Graphics</li>
            <li><i class="bi bi-check-circle"></i> Sound Design & Music</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 7 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Professional%20Video" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Premium Video Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card text-center">
          <h3>Premium Video</h3>
          <div class="price">Rp 7.000.000</div>
          <p>Solusi video editing premium untuk proyek besar</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Durasi Video 10-20 Menit</li>
            <li><i class="bi bi-check-circle"></i> Unlimited Revisi</li>
            <li><i class="bi bi-check-circle"></i> Professional Color Grading</li>
            <li><i class="bi bi-check-circle"></i> Advanced VFX & Graphics</li>
            <li><i class="bi bi-check-circle"></i> Full Sound Production</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 14 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Premium%20Video" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

    </div>

    <!-- Additional Info -->
    <div class="additional-info">
      <div class="row">
        <div class="col-lg-6">
          <h4>Keunggulan Layanan Video Editing Kami</h4>
          <ul>
            <li>Editor video profesional dan berpengalaman</li>
            <li>Peralatan editing terkini</li>
            <li>Kualitas output video Full HD/4K</li>
            <li>Penyimpanan backup file</li>
            <li>Konsultasi konsep gratis</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4>Software & Tools Yang Kami Gunakan</h4>
          <ul>
            <li>Adobe Premiere Pro untuk Video Editing</li>
            <li>Adobe After Effects untuk Visual Effects</li>
            <li>DaVinci Resolve untuk Color Grading</li>
            <li>Adobe Audition untuk Sound Design</li>
            <li>Cinema 4D untuk 3D Elements</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 