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

<!-- Work Process Section -->
<section class="work-process-section py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Proses Pengerjaan</h3>
      <p>Tahapan pengembangan website & aplikasi yang terstruktur dan profesional</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-chat-dots fs-1 text-primary"></i>
          </div>
          <h5>1. Konsultasi & Analisis</h5>
          <p class="mb-0">Diskusi mendalam tentang kebutuhan dan tujuan proyek Anda</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-pencil-square fs-1 text-primary"></i>
          </div>
          <h5>2. Desain & Prototype</h5>
          <p class="mb-0">Pembuatan wireframe dan desain UI/UX yang menarik</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-code-slash fs-1 text-primary"></i>
          </div>
          <h5>3. Pengembangan</h5>
          <p class="mb-0">Coding dengan teknologi terkini dan best practices</p>
        </div>g
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-rocket-takeoff fs-1 text-primary"></i>
          </div>
          <h5>4. Launch & Support</h5>
          <p class="mb-0">Deployment dan dukungan teknis berkelanjutan</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Additional Services Section -->
<section class="additional-services-section py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Layanan Tambahan</h3>
      <p>Tingkatkan performa website & aplikasi Anda dengan layanan pendukung kami</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-speedometer2 fs-1"></i>
          </div>
          <h5>Website Optimization</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Speed Optimization</li>
            <li><i class="bi bi-check2 text-success me-2"></i>SEO Enhancement</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Security Hardening</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-graph-up-arrow fs-1"></i>
          </div>
          <h5>Digital Analytics</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Traffic Analysis</li>
            <li><i class="bi bi-check2 text-success me-2"></i>User Behavior Tracking</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Conversion Optimization</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-shield-check fs-1"></i>
          </div>
          <h5>Maintenance & Support</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Regular Updates</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Backup Management</li>
            <li><i class="bi bi-check2 text-success me-2"></i>24/7 Technical Support</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Technology Stack Section -->
<section class="tech-stack-section py-5" style="background-color: #f1f3f5;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Technology Stack</h3>
      <p>Kami menggunakan teknologi terkini untuk menghasilkan produk berkualitas</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-filetype-html fs-1 text-primary mb-2"></i>
          <h6>HTML5/CSS3</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-filetype-js fs-1 text-primary mb-2"></i>
          <h6>JavaScript</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-bootstrap fs-1 text-primary mb-2"></i>
          <h6>Bootstrap</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-database fs-1 text-primary mb-2"></i>
          <h6>MySQL</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-phone fs-1 text-primary mb-2"></i>
          <h6>React Native</h6>
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
      <p>Pertanyaan yang sering diajukan seputar layanan web & mobile apps</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Berapa lama waktu pengerjaan website?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Waktu pengerjaan bervariasi tergantung kompleksitas proyek. Website landing page sederhana bisa selesai dalam 1-2 minggu, sedangkan website yang lebih kompleks seperti e-commerce bisa memakan waktu 1-3 bulan.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Apakah website yang dibuat responsive?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Ya, semua website yang kami buat responsive dan dapat diakses dengan baik di berbagai perangkat (desktop, tablet, dan mobile).
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Apakah ada garansi setelah website selesai?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Ya, kami memberikan garansi maintenance dan support selama periode tertentu sesuai paket yang dipilih. Layanan ini mencakup perbaikan bug, update sistem, dan bantuan teknis.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection 