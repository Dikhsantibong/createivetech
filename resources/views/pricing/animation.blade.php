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

<!-- Work Process Section -->
<section class="work-process-section py-5" style="background-color: #f0f7ff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Proses Pengerjaan Animasi</h3>
      <p>Tahapan pembuatan animasi yang terstruktur untuk hasil maksimal</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-journal-text fs-1 text-primary"></i>
          </div>
          <h5>1. Konsep & Storyboard</h5>
          <p class="mb-0">Pengembangan ide dan alur cerita visual</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-brush fs-1 text-primary"></i>
          </div>
          <h5>2. Design & Modeling</h5>
          <p class="mb-0">Pembuatan aset dan karakter animasi</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-camera-reels fs-1 text-primary"></i>
          </div>
          <h5>3. Animasi</h5>
          <p class="mb-0">Proses animasi dan visual effects</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-music-note-beamed fs-1 text-primary"></i>
          </div>
          <h5>4. Sound & Finishing</h5>
          <p class="mb-0">Penambahan audio dan final rendering</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Animation Types Section -->
<section class="animation-types-section py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Jenis Animasi</h3>
      <p>Berbagai jenis animasi yang kami tawarkan untuk kebutuhan Anda</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-phone fs-1"></i>
          </div>
          <h5>Motion Graphics</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Logo Animation</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Social Media Content</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Infographic Animation</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-camera-video fs-1"></i>
          </div>
          <h5>Character Animation</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>2D Character Animation</li>
            <li><i class="bi bi-check2 text-success me-2"></i>3D Character Animation</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Mascot Animation</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-display fs-1"></i>
          </div>
          <h5>Explainer Videos</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Product Explanation</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Service Introduction</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Educational Content</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Software Stack Section -->
<section class="software-stack-section py-5" style="background-color: #f5f0ff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Software Yang Kami Gunakan</h3>
      <p>Tools profesional untuk menghasilkan animasi berkualitas tinggi</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-pentagon fs-1 text-primary mb-2"></i>
          <h6>Adobe After Effects</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-box fs-1 text-primary mb-2"></i>
          <h6>Cinema 4D</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-triangle fs-1 text-primary mb-2"></i>
          <h6>Maya</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-circle fs-1 text-primary mb-2"></i>
          <h6>Blender</h6>
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
      <p>Pertanyaan yang sering diajukan seputar layanan animasi</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Berapa lama waktu pengerjaan animasi?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Waktu pengerjaan tergantung pada kompleksitas dan durasi animasi. Animasi sederhana bisa selesai dalam 1-2 minggu, sedangkan animasi yang lebih kompleks bisa memakan waktu 1-2 bulan.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Format file apa saja yang didukung?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Kami mendukung berbagai format output seperti MP4, MOV, AVI, dan GIF. Format akan disesuaikan dengan kebutuhan platform distribusi Anda.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Apakah bisa revisi setelah animasi selesai?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Ya, kami menyediakan kesempatan revisi sesuai dengan paket yang dipilih. Setiap revisi akan diproses secepat mungkin untuk memastikan kepuasan klien.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection 