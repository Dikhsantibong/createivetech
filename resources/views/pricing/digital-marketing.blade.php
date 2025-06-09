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

<!-- Work Process Section -->
<section class="work-process-section py-5" style="background-color: #e8f4ff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Proses Digital Marketing</h3>
      <p>Tahapan strategi digital marketing yang terstruktur untuk hasil optimal</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-search fs-1 text-primary"></i>
          </div>
          <h5>1. Analisis & Research</h5>
          <p class="mb-0">Riset pasar dan analisis kompetitor</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-bullseye fs-1 text-primary"></i>
          </div>
          <h5>2. Strategy Planning</h5>
          <p class="mb-0">Perencanaan strategi dan target market</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-rocket-takeoff fs-1 text-primary"></i>
          </div>
          <h5>3. Implementation</h5>
          <p class="mb-0">Eksekusi kampanye dan optimasi</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>
          </div>
          <h5>4. Monitor & Report</h5>
          <p class="mb-0">Analisis performa dan pelaporan</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Marketing Channels Section -->
<section class="marketing-channels-section py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Channel Marketing</h3>
      <p>Platform digital yang kami optimalkan untuk bisnis Anda</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-instagram fs-1"></i>
          </div>
          <h5>Social Media Marketing</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Instagram Ads</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Facebook Marketing</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Content Strategy</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-search-heart fs-1"></i>
          </div>
          <h5>Search Engine Marketing</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Google Ads</li>
            <li><i class="bi bi-check2 text-success me-2"></i>SEO Optimization</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Keyword Research</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-envelope-paper fs-1"></i>
          </div>
          <h5>Email Marketing</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Campaign Strategy</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Newsletter Design</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Performance Analysis</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tools Section -->
<section class="tools-section py-5" style="background-color: #fff5f8;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Marketing Tools</h3>
      <p>Tools profesional yang kami gunakan untuk kampanye digital</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-google fs-1 text-primary mb-2"></i>
          <h6>Google Analytics</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-facebook fs-1 text-primary mb-2"></i>
          <h6>Meta Ads</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-mailchimp fs-1 text-primary mb-2"></i>
          <h6>Mailchimp</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-bar-chart-line fs-1 text-primary mb-2"></i>
          <h6>SEMrush</h6>
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
      <p>Pertanyaan yang sering diajukan seputar layanan digital marketing</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Berapa lama untuk melihat hasil digital marketing?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Hasil digital marketing bervariasi tergantung strategi yang digunakan. Untuk paid advertising, hasil bisa terlihat dalam hitungan hari. Untuk SEO dan content marketing, diperlukan waktu 3-6 bulan untuk hasil yang optimal.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Apakah ada laporan performa kampanye?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Ya, kami menyediakan laporan performa kampanye secara berkala yang mencakup metrics penting seperti engagement rate, conversion rate, ROI, dan rekomendasi optimasi.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Platform apa saja yang dioptimalkan?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Kami mengoptimalkan berbagai platform sesuai dengan target market Anda, termasuk Instagram, Facebook, Google, YouTube, TikTok, dan platform digital lainnya yang relevan.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection 