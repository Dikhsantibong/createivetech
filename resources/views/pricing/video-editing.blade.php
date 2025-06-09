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

<!-- Work Process Section -->
<section class="work-process-section py-5" style="background-color: #f0f2ff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Proses Video Editing</h3>
      <p>Tahapan pengerjaan video yang terstruktur untuk hasil maksimal</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-collection-play fs-1 text-primary"></i>
          </div>
          <h5>1. Review Material</h5>
          <p class="mb-0">Pemeriksaan dan seleksi footage video</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-scissors fs-1 text-primary"></i>
          </div>
          <h5>2. Rough Cut</h5>
          <p class="mb-0">Penyusunan alur dan struktur video</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-magic fs-1 text-primary"></i>
          </div>
          <h5>3. Fine Cut</h5>
          <p class="mb-0">Penambahan efek dan transisi</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-film fs-1 text-primary"></i>
          </div>
          <h5>4. Final Output</h5>
          <p class="mb-0">Color grading dan finishing</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Types Section -->
<section class="video-types-section py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Jenis Video</h3>
      <p>Berbagai jenis video yang dapat kami kerjakan</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-camera-reels fs-1"></i>
          </div>
          <h5>Corporate Video</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Company Profile</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Product Showcase</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Event Documentation</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-instagram fs-1"></i>
          </div>
          <h5>Social Media Content</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Instagram Reels</li>
            <li><i class="bi bi-check2 text-success me-2"></i>TikTok Videos</li>
            <li><i class="bi bi-check2 text-success me-2"></i>YouTube Content</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-megaphone fs-1"></i>
          </div>
          <h5>Commercial Video</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>TV Commercial</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Product Advertisement</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Campaign Video</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Software Stack Section -->
<section class="software-stack-section py-5" style="background-color: #fff5f5;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Editing Software</h3>
      <p>Tools profesional yang kami gunakan untuk editing video</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-camera-video fs-1 text-primary mb-2"></i>
          <h6>Adobe Premiere Pro</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-stars fs-1 text-primary mb-2"></i>
          <h6>After Effects</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-music-note-beamed fs-1 text-primary mb-2"></i>
          <h6>Adobe Audition</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-palette fs-1 text-primary mb-2"></i>
          <h6>DaVinci Resolve</h6>
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
      <p>Pertanyaan yang sering diajukan seputar layanan video editing</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Format video apa saja yang didukung?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Kami mendukung berbagai format video seperti MP4, MOV, AVI, dan format lainnya. Output video juga dapat disesuaikan dengan kebutuhan platform distribusi Anda.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Berapa lama proses editing video?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Waktu pengerjaan tergantung pada kompleksitas dan durasi video. Video pendek bisa selesai dalam 2-3 hari, sedangkan video yang lebih kompleks bisa memakan waktu 1-2 minggu.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Apakah ada backup file video?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Ya, kami menyimpan backup file project dan hasil editing selama periode tertentu untuk mengantisipasi kebutuhan revisi atau permintaan file di kemudian hari.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection 