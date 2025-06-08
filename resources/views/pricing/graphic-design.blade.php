@extends('layouts.pricing')

@section('title', 'Graphic Design Pricing')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Layanan Desain Grafis</h2>
        <p>Wujudkan identitas visual brand Anda dengan desain yang profesional dan berkualitas</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket desain grafis yang dapat disesuaikan dengan kebutuhan brand Anda</p>
    </div>

    <div class="row gy-4 justify-content-center">
      
      <!-- Basic Design Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card text-center">
          <h3>Basic Design</h3>
          <div class="price">Rp 1.000.000</div>
          <p>Paket desain dasar untuk kebutuhan sederhana</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Logo Design (2 Konsep)</li>
            <li><i class="bi bi-check-circle"></i> Business Card Design</li>
            <li><i class="bi bi-check-circle"></i> 2x Revisi</li>
            <li><i class="bi bi-check-circle"></i> Source File (AI/PSD)</li>
            <li><i class="bi bi-check-circle"></i> Format Web & Print Ready</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 3 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Basic%20Design" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Professional Design Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card text-center">
          <h3>Professional Design</h3>
          <div class="price">Rp 2.500.000</div>
          <p>Solusi desain lengkap untuk branding profesional</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Logo Design (4 Konsep)</li>
            <li><i class="bi bi-check-circle"></i> Full Stationery Design</li>
            <li><i class="bi bi-check-circle"></i> Social Media Kit</li>
            <li><i class="bi bi-check-circle"></i> 4x Revisi</li>
            <li><i class="bi bi-check-circle"></i> Brand Guidelines</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 7 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Professional%20Design" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

      <!-- Premium Design Package -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card text-center">
          <h3>Premium Design</h3>
          <div class="price">Rp 5.000.000</div>
          <p>Solusi desain premium untuk branding komprehensif</p>
          <ul class="features">
            <li><i class="bi bi-check-circle"></i> Custom Logo Design</li>
            <li><i class="bi bi-check-circle"></i> Complete Brand Identity</li>
            <li><i class="bi bi-check-circle"></i> Marketing Materials</li>
            <li><i class="bi bi-check-circle"></i> Unlimited Revisi</li>
            <li><i class="bi bi-check-circle"></i> Full Brand Guidelines</li>
            <li><i class="bi bi-check-circle"></i> Durasi Pengerjaan 14 Hari</li>
          </ul>
          <a href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20paket%20Premium%20Design" class="btn-pricing">Pilih Paket</a>
        </div>
      </div>

    </div>

    <!-- Additional Info -->
    <div class="additional-info">
      <div class="row">
        <div class="col-lg-6">
          <h4>Keunggulan Layanan Desain Kami</h4>
          <ul>
            <li>Tim desainer profesional dan kreatif</li>
            <li>Konsep desain yang unik dan original</li>
            <li>Proses pengerjaan yang terstruktur</li>
            <li>File output berkualitas tinggi</li>
            <li>Konsultasi desain gratis</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4>Software & Tools Yang Kami Gunakan</h4>
          <ul>
            <li>Adobe Illustrator untuk Vector Design</li>
            <li>Adobe Photoshop untuk Image Editing</li>
            <li>Adobe InDesign untuk Layout</li>
            <li>Figma untuk UI/UX Design</li>
            <li>CorelDRAW untuk Print Design</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 