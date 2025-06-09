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

<!-- Work Process Section -->
<section class="work-process-section py-5" style="background-color: #fff0e6;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Proses Desain</h3>
      <p>Tahapan pengerjaan desain yang terstruktur untuk hasil terbaik</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-chat-text fs-1 text-primary"></i>
          </div>
          <h5>1. Brief & Research</h5>
          <p class="mb-0">Diskusi kebutuhan dan riset referensi</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-pencil fs-1 text-primary"></i>
          </div>
          <h5>2. Sketsa Konsep</h5>
          <p class="mb-0">Pembuatan konsep dan sketsa awal</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-palette fs-1 text-primary"></i>
          </div>
          <h5>3. Desain</h5>
          <p class="mb-0">Proses desain dan visualisasi</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="process-card text-center p-4 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <div class="process-icon mb-3">
            <i class="bi bi-check2-circle fs-1 text-primary"></i>
          </div>
          <h5>4. Revisi & Finalisasi</h5>
          <p class="mb-0">Penyempurnaan dan finalisasi desain</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Design Services Section -->
<section class="design-services-section py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Layanan Desain</h3>
      <p>Berbagai layanan desain grafis yang kami tawarkan</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-bezier2 fs-1"></i>
          </div>
          <h5>Brand Identity</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Logo Design</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Brand Guidelines</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Business Stationery</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-phone fs-1"></i>
          </div>
          <h5>Social Media Design</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Feed Design</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Story Template</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Social Media Kit</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card p-4 rounded shadow-sm h-100" style="background-color: #f8f9fa;">
          <div class="service-icon mb-3 text-primary">
            <i class="bi bi-file-earmark-text fs-1"></i>
          </div>
          <h5>Marketing Materials</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2 text-success me-2"></i>Brochure Design</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Banner & Poster</li>
            <li><i class="bi bi-check2 text-success me-2"></i>Product Packaging</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Software Stack Section -->
<section class="software-stack-section py-5" style="background-color: #f5fff0;">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h3>Software Design</h3>
      <p>Tools profesional yang kami gunakan untuk menghasilkan desain berkualitas</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-vector-pen fs-1 text-primary mb-2"></i>
          <h6>Adobe Illustrator</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-layers fs-1 text-primary mb-2"></i>
          <h6>Adobe Photoshop</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-grid-3x3 fs-1 text-primary mb-2"></i>
          <h6>Adobe InDesign</h6>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="tech-card text-center p-3 rounded shadow-sm h-100" style="background-color: #ffffff;">
          <i class="bi bi-pentagon fs-1 text-primary mb-2"></i>
          <h6>Figma</h6>
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
      <p>Pertanyaan yang sering diajukan seputar layanan desain grafis</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Format file apa yang akan saya terima?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Anda akan menerima file dalam format AI, PSD, PDF, dan JPG/PNG untuk penggunaan digital maupun cetak. Semua file akan disesuaikan dengan kebutuhan penggunaan Anda.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Berapa kali revisi yang diberikan?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Jumlah revisi bervariasi sesuai paket yang dipilih. Kami selalu berusaha memastikan kepuasan klien dengan hasil desain yang sesuai dengan brief dan ekspektasi.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Apakah desain yang dibuat original?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Ya, semua desain yang kami buat adalah original dan custom sesuai kebutuhan klien. Kami tidak menggunakan template atau desain yang sudah ada sebelumnya.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection 