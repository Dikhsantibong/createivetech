@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <img src="{{ asset('assets/img/hero-bg.png') }}" alt="" data-aos="fade-in">
  <div class="container">
    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-8 col-lg-10">
        <h2>Portofolio<span>.</span></h2>
        <p class="hero-quote">"Setiap proyek adalah cerita tentang inovasi, kreativitas, dan keunggulan dalam eksekusi."</p>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Portofolio</h2>
    <p>Temukan Proyek Terbaru Kami</p>
  </div>

  <div class="container">
    <!-- Portfolio Filters -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8">
        <ul class="portfolio-filters d-flex justify-content-center gap-2 p-0" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active btn btn-sm btn-outline-primary">Semua</li>
          <li data-filter="filter-web" class="btn btn-sm btn-outline-primary">Web & Aplikasi</li>
          <li data-filter="filter-animation" class="btn btn-sm btn-outline-primary">Animasi</li>
          <li data-filter="filter-video" class="btn btn-sm btn-outline-primary">Video</li>
          <li data-filter="filter-marketing" class="btn btn-sm btn-outline-primary">Pemasaran</li>
          <li data-filter="filter-design" class="btn btn-sm btn-outline-primary">Desain</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container">
      <!-- Web & Apps Projects -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="{{ asset('assets/img/portfolio/web-1.png') }}" class="card-img-top" alt="Monitoring System">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Aplikasi Monitoring Operasi Mesin</h5>
            <p class="card-text text-muted small">Platform terintegrasi untuk monitoring dan analisis kinerja pembangkit listrik secara real-time.</p>
            <div class="portfolio-links mt-3">
              <a href="{{ asset('assets/img/portfolio/web-1.png') }}" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn">
                <i class="bi bi-zoom-in"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="{{ asset('assets/img/portfolio/web-2.png') }}" class="card-img-top" alt="Daily Meeting App">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Aplikasi Monitoring dan Daily Meeting</h5>
            <p class="card-text text-muted small">Platform terintegrasi untuk monitoring dan Daily Meeting Untuk Meningkatkan Kinerja Perusahaan</p>
            <div class="portfolio-links mt-3">
              <a href="{{ asset('assets/img/portfolio/web-2.png') }}" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn">
                <i class="bi bi-zoom-in"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="{{ asset('assets/img/portfolio/web-3.png') }}" class="card-img-top" alt="Company Profile">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Aplikasi Company Profile</h5>
            <p class="card-text text-muted small">Platform terintegrasi untuk Menampilkan Profile dan Berita Seputar Biro SDM Polda Sultra</p>
            <div class="portfolio-links mt-3">
              <a href="{{ asset('assets/img/portfolio/web-3.png') }}" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn">
                <i class="bi bi-zoom-in"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="{{ asset('assets/img/portfolio/web-4.png') }}" class="card-img-top" alt="Attendance App">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Aplikasi Absensi</h5>
            <p class="card-text text-muted small">Aplikasi Mobile Untuk Monitoring Kehadiran dan Pengajuan Cuti Biro SDM Polda Sultra</p>
            <div class="portfolio-links mt-3">
              <a href="{{ asset('assets/img/portfolio/web-4.png') }}" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn">
                <i class="bi bi-zoom-in"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Animation Projects -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-animation">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="https://i3.ytimg.com/vi/C5dziKknHTU/hqdefault.jpg" class="card-img-top" alt="Explainer Animation">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Animasi Penjelasan</h5>
            <p class="card-text text-muted small">Video animasi 2D untuk produk startup</p>
            <div class="portfolio-links mt-3">
              <a href="#" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="C5dziKknHTU">
                <i class="bi bi-play-circle"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-animation">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="https://i3.ytimg.com/vi/E7jZ6hDX6f4/hqdefault.jpg" class="card-img-top" alt="Safety Animation">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Animasi Induksi Keselamatan</h5>
            <p class="card-text text-muted small">Animasi safety induction untuk perusahaan</p>
            <div class="portfolio-links mt-3">
              <a href="#" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="E7jZ6hDX6f4">
                <i class="bi bi-play-circle"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Video Projects -->
      <div class="col-lg-4 col-md-6 portfolio-item filter-video">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="https://i3.ytimg.com/vi/qNZ-McWO8jc/hqdefault.jpg" class="card-img-top" alt="Safety Video">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Video Induksi Keselamatan</h5>
            <p class="card-text text-muted small">Video safety induction untuk perusahaan</p>
            <div class="portfolio-links mt-3">
              <a href="#" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="qNZ-McWO8jc">
                <i class="bi bi-play-circle"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-animation">
        <div class="card portfolio-card h-100 border-0 shadow-sm">
          <div class="portfolio-img">
            <img src="https://i3.ytimg.com/vi/5RWIf2AVL2U/hqdefault.jpg" class="card-img-top" alt="Educational Animation">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1">Animasi Penjelasan</h5>
            <p class="card-text text-muted small">Video animasi 2D untuk pendidikan</p>
            <div class="portfolio-links mt-3">
              <a href="#" class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="5RWIf2AVL2U">
                <i class="bi bi-play-circle"></i> Pratinjau
              </a>
              <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                <i class="bi bi-link-45deg"></i> Detail
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body p-0">
        <!-- Video content will be inserted here -->
      </div>
    </div>
  </div>
</div>
@endsection

@section('styles')
<style>
  .hero-quote {
    font-size: 1.25rem;
    font-style: italic;
    color: rgba(255, 255, 255, 0.9);
    margin-top: 1.5rem;
    line-height: 1.6;
    font-family: 'Poppins', sans-serif;
  }

  @media (max-width: 768px) {
    .hero-quote {
      font-size: 1.1rem;
    }
  }

  /* Portfolio Styles */
  .portfolio-filters {
    list-style: none;
    margin-bottom: 2rem;
  }

  .portfolio-filters li {
    cursor: pointer;
    padding: 8px 16px;
    border-radius: 50px;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
  }

  .portfolio-filters .filter-active {
    background: var(--primary-color);
    color: #fff;
    border-color: var(--primary-color);
  }

  .portfolio-card {
    transition: all 0.3s ease;
  }

  .portfolio-card:hover {
    transform: translateY(-5px);
  }

  .portfolio-img {
    height: 240px;
    overflow: hidden;
    position: relative;
  }

  .portfolio-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .portfolio-img:hover img {
    transform: scale(1.1);
  }

  .portfolio-links a {
    transition: all 0.3s ease;
  }

  .portfolio-links a:hover {
    transform: translateY(-2px);
  }

  /* Video Modal Styles */
  #videoModal .modal-content {
    background: #000;
    border-radius: 15px;
    overflow: hidden;
  }

  #videoModal .modal-header {
    background: rgba(255, 255, 255, 0.1);
    border-bottom: none;
  }

  #videoModal .btn-close {
    background-color: #fff;
    opacity: 0.7;
  }

  #videoModal .btn-close:hover {
    opacity: 1;
  }

  #videoModal .modal-body {
    padding: 0;
  }

  #videoModal iframe {
    width: 100%;
    aspect-ratio: 16/9;
    border: none;
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .portfolio-img {
      height: 200px;
    }

    .portfolio-filters li {
      font-size: 14px;
      padding: 6px 12px;
    }
  }
</style>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Isotope
  let portfolioContainer = document.querySelector('.portfolio-container');
  let iso = new Isotope(portfolioContainer, {
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
  });

  // Filter items on button click
  document.querySelectorAll('.portfolio-filters li').forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      let filterValue = this.getAttribute('data-filter');

      // Update active state
      document.querySelector('.portfolio-filters .filter-active').classList.remove('filter-active');
      this.classList.add('filter-active');

      // Filter items
      iso.arrange({
        filter: filterValue === '*' ? '*' : '.' + filterValue
      });
    });
  });

  // Handle video modal
  document.querySelectorAll('[data-bs-target="#videoModal"]').forEach(button => {
    button.addEventListener('click', function() {
      const videoId = this.getAttribute('data-video-id');
      const modalBody = document.querySelector('#videoModal .modal-body');
      modalBody.innerHTML = `
        <iframe
          src="https://www.youtube.com/embed/${videoId}?autoplay=1"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      `;
    });
  });

  // Clean up video when modal is closed
  document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
    this.querySelector('.modal-body').innerHTML = '';
  });
});
</script>
@endsection 