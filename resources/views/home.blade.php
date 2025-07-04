@extends('layouts.app')

@section('styles')
  <style>
    .team-member .member-img {
      position: relative;
      overflow: hidden;
      aspect-ratio: 1/1;  /* This makes it square */
    }
    
    .team-member .member-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;  /* This ensures image covers the area without distortion */
      object-position: center;  /* Centers the image */
    }

    /* Maintain aspect ratio and cover on mobile */
    @media (max-width: 768px) {
      .team-member .member-img {
        aspect-ratio: 1/1;
      }
    }

    /* Play Button Animation Styles */
    .play-btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.9);
      transition: all 0.3s ease;
      animation: playButtonPulse 2s infinite;
    }

    .play-btn i {
      font-size: 40px;
      color: var(--primary-color);
      transition: all 0.3s ease;
    }

    .play-btn:hover {
      transform: translate(-50%, -50%) scale(1.1);
      background: #fff;
    }

    .play-btn:hover i {
      transform: scale(1.2);
    }

    /* Cursor Animation */
    .cursor {
      width: 20px;
      height: 20px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 50%;
      position: absolute;
      pointer-events: none;
      animation: cursorMove 3s infinite;
      z-index: 9999;
      display: none;
    }

    /* Pulse Animation */
    @keyframes playButtonPulse {
      0% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
      }
      70% {
        box-shadow: 0 0 0 15px rgba(255, 255, 255, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
      }
    }

    /* Cursor Movement Animation */
    @keyframes cursorMove {
      0% {
        transform: translate(-50px, -50px) scale(1);
      }
      45% {
        transform: translate(0, 0) scale(1);
      }
      50% {
        transform: translate(0, 0) scale(0.8);
      }
      55% {
        transform: translate(0, 0) scale(1);
      }
      100% {
        transform: translate(-50px, -50px) scale(1);
      }
    }

    /* Video Container Style */
    .video-container {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .video-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .video-container::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .video-container:hover::after {
      background: rgba(0, 0, 0, 0.3);
    }
  </style>
@endsection

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('assets/img/hero-bg.png') }}" alt="" data-aos="fade-in">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-8 col-lg-10">
            <h2>CreativeTech Agency<span>.</span></h2>
            <p>Multimedia & Software Development</p>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-code-slash"></i>
              <h3><a href="{{ route('pricing.web-apps') }}">Web & Mobile Apps</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-camera-reels"></i>
              <h3><a href="{{ route('pricing.animation') }}">Animasi 2D/3D</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-film"></i>
              <h3><a href="{{ route('pricing.video-editing') }}">Video Editing</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-share"></i>
              <h3><a href="{{ route('pricing.digital-marketing') }}">Digital Marketing</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-palette"></i>
              <h3><a href="{{ route('pricing.graphic-design') }} ">Desain Grafis</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2 position-relative">
            <div class="video-container" id="aboutVideo">
              <div id="player"></div>
              <div class="custom-play-button">
                <i class="bi bi-play-circle"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Tentang Kami</h3>
            <p class="fst-italic">
              CreativeTech Agency adalah agensi teknologi kreatif yang menyediakan layanan inovatif dalam pengembangan web dan aplikasi, manajemen media sosial, konsultasi IT, editing video profesional, animasi 2D dan 3D, serta desain grafis.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span><strong>Visi:</strong> Menjadi mitra pilihan dalam dunia teknologi kreatif, memberikan solusi digital inovatif yang mampu bersaing di pasar global.</span></li>
              <li><i class="bi bi-check2-all"></i> <span><strong>Misi:</strong> Menggabungkan kreativitas dan teknologi untuk menyediakan layanan yang memenuhi kebutuhan bisnis klien.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Kami berkomitmen untuk membantu bisnis dan organisasi menciptakan solusi digital yang kreatif dan berdaya saing tinggi.</span></li>
            </ul>
          </div>
        </div>
      </div>

      <style>
        .video-container {
          position: relative;
          width: 100%;
          padding-bottom: 56.25%;
          overflow: hidden;
          border-radius: 15px;
          background: #000;
        }

        .video-container #player,
        .video-container iframe {
          position: absolute;
          top: -15%;
          left: -15%;
          width: 130% !important;
          height: 130% !important;
          pointer-events: none;
          border: none;
        }

        .custom-play-button {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 2;
          cursor: pointer;
          opacity: 0;
          transition: opacity 0.3s;
        }

        .custom-play-button i {
          font-size: 4rem;
          color: white;
          text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .video-container:hover .custom-play-button {
          opacity: 1;
        }

        /* Hide YouTube branding */
        .ytp-chrome-top,
        .ytp-chrome-bottom,
        .ytp-watermark,
        .ytp-title-channel,
        .ytp-title-text,
        .ytp-gradient-top,
        .ytp-gradient-bottom,
        .ytp-embed,
        .ytp-cards-button,
        .ytp-pause-overlay,
        .ytp-ce-element {
          display: none !important;
          opacity: 0 !important;
          visibility: hidden !important;
        }
      </style>

      <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
          player = new YT.Player('player', {
            videoId: 'C5dziKknHTU',
            playerVars: {
              'autoplay': 0,
              'controls': 0,
              'rel': 0,
              'showinfo': 0,
              'loop': 1,
              'playlist': 'C5dziKknHTU',
              'modestbranding': 1,
              'mute': 1,
              'playsinline': 1,
              'enablejsapi': 1,
              'origin': window.location.origin,
              'widget_referrer': window.location.origin,
              'fs': 0,
              'iv_load_policy': 3
            },
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
        }

        function onPlayerReady(event) {
          const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                player.playVideo();
              } else {
                player.pauseVideo();
              }
            });
          }, { threshold: 0.5 });

          observer.observe(document.getElementById('aboutVideo'));
        }

        function onPlayerStateChange(event) {
          const playButton = document.querySelector('.custom-play-button');
          playButton.style.opacity = event.data === YT.PlayerState.PLAYING ? '0' : '1';
        }

        // Handle custom play button
        document.querySelector('.custom-play-button').addEventListener('click', function() {
          if (player.getPlayerState() === YT.PlayerState.PLAYING) {
            player.pauseVideo();
          } else {
            player.playVideo();
          }
        });
      </script>
    </section><!-- /About Section -->

  </section><!-- /Services Section -->

  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section dark-background">

    <img src="{{ asset('assets/img/cta-bg.jpg') }}" alt="">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Wujudkan Visi Digital Anda Bersama Kami</h3>
            <p>Kami siap membantu mengembangkan solusi digital yang inovatif dan kreatif untuk bisnis Anda. Dengan tim profesional dan pengalaman yang luas, kami berkomitmen untuk memberikan layanan terbaik yang sesuai dengan kebutuhan Anda.</p>
            <a class="cta-btn" href="https://wa.me/6282293118410?text=Halo%20CreativeTech%2C%20saya%20tertarik%20dengan%20layanan%20yang%20ditawarkan." target="_blank">Hubungi Kami di WhatsApp</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Call To Action Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Kenapa Memilih Kami?</h2>
          <p>Klien Puas dengan Layanan Kami</p>
        </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/img/features-bg.jpg') }}" alt="">
          </div>
          <div class="col-lg-6">
            

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-people flex-shrink-0"></i>
              <div>
                <h4>Tim Berpengalaman</h4>
                <p>Profesional dengan pengalaman di berbagai bidang kreatif dan teknologi.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-grid flex-shrink-0"></i>
              <div>
                <h4>Layanan Terintegrasi</h4>
                <p>Semua solusi digital yang Anda butuhkan ada dalam satu atap.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-lightbulb flex-shrink-0"></i>
              <div>
                <h4>Inovasi Berkelanjutan</h4>
                <p>Selalu mengikuti tren terbaru di dunia teknologi dan desain untuk menghadirkan solusi yang relevan.</p>
              </div>
            </div><!-- End Features Item-->

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-diagram-3 flex-shrink-0"></i>
              <div>
                <h4>Proses Kerja Sistematis</h4>
                <p>Analisis kebutuhan, pengembangan konsep, produksi dan eksekusi, serta monitoring dan evaluasi yang terstruktur.</p>
              </div>
            </div><!-- End Features Item-->

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Produk dan Layanan Utama</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-code-square"></i>
              </div>
              <h3>Pengembangan Web dan Aplikasi Mobile</h3>
              <p>Kami menyediakan solusi pengembangan website dan aplikasi mobile yang responsif, user-friendly, dan aman untuk mendukung bisnis Anda.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-camera-video"></i>
              </div>
              <h3>Animasi 2D dan 3D</h3>
              <p>Menyajikan animasi kreatif yang menarik untuk keperluan pemasaran, edukasi, dan hiburan dengan storytelling visual yang efektif.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-film"></i>
              </div>
              <h3>Editing Video Profesional</h3>
              <p>Menggabungkan teknik sinematik dan teknologi terkini untuk menghasilkan video berkualitas tinggi yang dapat meningkatkan brand awareness.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-share"></i>
              </div>
              <h3>Manajemen Media Sosial</h3>
              <p>Kami menawarkan strategi pemasaran digital yang meliputi SEO, SEM, kampanye media sosial, dan email marketing untuk memperluas jangkauan merek Anda.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-palette"></i>
              </div>
              <h3>Desain Grafis dan Branding</h3>
              <p>Membantu menciptakan identitas merek yang kuat melalui desain logo, panduan branding, dan strategi komunikasi visual.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-gear"></i>
              </div>
              <h3>Konsultasi IT</h3>
              <p>Memberikan solusi konsultasi teknologi informasi yang komprehensif untuk membantu mengoptimalkan dan mengembangkan infrastruktur IT bisnis Anda.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

  

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Portfolio Modal -->
      <div class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div class="portfolio-modal-content">
                <!-- Content will be dynamically loaded here -->
              </div>
            </div>
            <div class="modal-footer border-0">
              <div class="portfolio-description p-3">
                <!-- Description will be dynamically loaded here -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Hasil Karya Terbaik Kami</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8">
            <ul class="portfolio-filters d-flex justify-content-center gap-2 p-0" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active btn btn-sm btn-outline-primary">Semua</li>
              <li data-filter="filter-web" class="btn btn-sm btn-outline-primary">Web & Apps</li>
              <li data-filter="filter-animation" class="btn btn-sm btn-outline-primary">Animasi</li>
              <li data-filter="filter-video" class="btn btn-sm btn-outline-primary">Video</li>
              <li data-filter="filter-marketing" class="btn btn-sm btn-outline-primary">Marketing</li>
              <li data-filter="filter-design" class="btn btn-sm btn-outline-primary">Design</li>
            </ul>
              </div>
              </div>

        <div class="row g-4">
          <!-- Web & Apps Portfolio Items -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
              <div class="portfolio-img">
                <img src="{{ asset('assets/img/portfolio/web-1.png') }}" class="card-img-top" alt="E-Commerce Platform">
              </div>
              <div class="card-body">
                <h5 class="card-title mb-1">Aplikasi Monitoring Operasi Mesin</h5>
                <p class="card-text text-muted small">Platform terintegrasi untuk monitoring dan analisis kinerja pembangkit listrik secara real-time. </p>
                <div class="portfolio-links mt-3">
                  <a href="{{ asset('assets/img/portfolio/web-1.png') }}" 
                     class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                     data-title="E-Commerce Platform"
                     data-description="Website toko online dengan sistem manajemen inventori yang lengkap dan mudah digunakan. Dilengkapi dengan fitur manajemen stok, pembayaran online, dan laporan penjualan."
                     data-type="image">
                    <i class="bi bi-zoom-in"></i> Preview
                  </a>
                  <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                    <i class="bi bi-link-45deg"></i> Details
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
              <div class="portfolio-img">
                <img src="{{ asset('assets/img/portfolio/web-2.png') }}" class="card-img-top" alt="Company Profile">
              </div>
              <div class="card-body">
                <h5 class="card-title mb-1">Aplikasi Monitoring dan Daily Meeting</h5>
                <p class="card-text text-muted small">Platform terintegrasi untuk monitoring dan Daily Meeting Untuk Meningkatkan Kinerja Perusahaan</p>
                <div class="portfolio-links mt-3">
                  <a href="{{ asset('assets/img/portfolio/web-2.png') }}" 
                     class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                     data-title="Company Profile"
                     data-description="Website profil perusahaan responsif dengan desain modern dan profesional. Menampilkan informasi perusahaan secara lengkap dan menarik."
                     data-type="image">
                    <i class="bi bi-zoom-in"></i> Preview
                  </a>
                  <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                    <i class="bi bi-link-45deg"></i> Details
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
              <div class="portfolio-img">
                <img src="{{ asset('assets/img/portfolio/web-3.png') }}" class="card-img-top" alt="Company Profile">
              </div>
              <div class="card-body">
                <h5 class="card-title mb-1">Aplikasi Company Profile</h5>
                <p class="card-text text-muted small">Platform terintegrasi untuk Menampilkan Profile dan Berita Seputar Biro SDM Polda Sultra</p>
                <div class="portfolio-links mt-3"> 
                  <a href="{{ asset('assets/img/portfolio/web-3.png') }}" 
                     class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                     data-title="Company Profile"
                     data-description="Website profil perusahaan responsif dengan desain modern dan profesional. Menampilkan informasi perusahaan secara lengkap dan menarik."
                     data-type="image">
                    <i class="bi bi-zoom-in"></i> Preview
                  </a>
                  <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                    <i class="bi bi-link-45deg"></i> Details
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
              <div class="portfolio-img">
                <img src="{{ asset('assets/img/portfolio/web-4.png') }}" class="card-img-top" alt="Company Profile">
              </div>
              <div class="card-body">
                <h5 class="card-title mb-1">Aplikasi Absensi</h5>
                <p class="card-text text-muted small">Apliasi Mobile Untuk Monitoring Kehadiran dan Pengajuan Cuti Biro SDM Polda Sultra</p>
                <div class="portfolio-links mt-3"> 
                  <a href="{{ asset('assets/img/portfolio/web-4.png') }}" 
                     class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                     data-title="Company Profile"
                     data-description="Website profil perusahaan responsif dengan desain modern dan profesional. Menampilkan informasi perusahaan secara lengkap dan menarik."
                     data-type="image">
                    <i class="bi bi-zoom-in"></i> Preview
                  </a>
                  <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                    <i class="bi bi-link-45deg"></i> Details
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Animation Portfolio Items -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-animation">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
                <div class="portfolio-img">
                    <!-- Thumbnail dari YouTube dengan multiple fallback -->
                    <img src="https://i3.ytimg.com/vi/C5dziKknHTU/hqdefault.jpg" 
                         class="card-img-top" 
                         alt="Explainer Animation"
                         onerror="this.onerror=null; this.src='{{ asset('assets/img/portfolio/video-placeholder.jpg') }}';">
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">Explainer Animation</h5>
                    <p class="card-text text-muted small">Video animasi 2D untuk produk startup</p>
                    <div class="portfolio-links mt-3">
                        <a href="#" 
                            class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#videoModal"
                            data-video-id="C5dziKknHTU"
                            data-title="Explainer Animation"
                            data-description="Video animasi 2D yang menjelaskan produk startup dengan cara yang menarik dan mudah dipahami. Menggunakan teknik motion graphics modern.">
                            <i class="bi bi-play-circle"></i> Preview
                        </a>
                        <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                            <i class="bi bi-link-45deg"></i> Details
                        </a>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-animation">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
                <div class="portfolio-img">
                    <!-- Thumbnail dari YouTube dengan multiple fallback -->
                    <img src="https://i3.ytimg.com/vi/E7jZ6hDX6f4/hqdefault.jpg" 
                         class="card-img-top" 
                         alt="Safety Induction Animation"
                         onerror="this.onerror=null; this.src='{{ asset('assets/img/portfolio/video-placeholder.jpg') }}';">
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">Safety Induction Animation</h5>
                    <p class="card-text text-muted small">Animasi safety induction untuk perusahaan</p>
                    <div class="portfolio-links mt-3">
                        <a href="#" 
                            class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#videoModal"
                            data-video-id="E7jZ6hDX6f4"
                            data-title="Safety Induction Animation"
                            data-description="Animasi safety induction yang informatif dan menarik untuk perusahaan. Menjelaskan prosedur keselamatan dengan cara yang mudah dipahami.">
                            <i class="bi bi-play-circle"></i> Preview
                        </a>
                        <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                            <i class="bi bi-link-45deg"></i> Details
                        </a>
                    </div>
                </div>
            </div>
          </div>

          <!-- Video Portfolio Items -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-animation">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
                <div class="portfolio-img">
                    <!-- Thumbnail dari YouTube dengan multiple fallback -->
                    <img src="https://i3.ytimg.com/vi/qNZ-McWO8jc/hqdefault.jpg" 
                         class="card-img-top" 
                         alt="Safety Induction Video"
                         onerror="this.onerror=null; this.src='{{ asset('assets/img/portfolio/video-placeholder.jpg') }}';">
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">Safety Induction Animation</h5>
                    <p class="card-text text-muted small">Video safety induction untuk perusahaan</p>
                    <div class="portfolio-links mt-3">
                        <a href="#" 
                            class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#videoModal"
                            data-video-id="qNZ-McWO8jc"
                            data-title="Safety Induction Video"
                            data-description="Video safety induction yang informatif dan menarik untuk perusahaan. Menjelaskan prosedur keselamatan dengan cara yang mudah dipahami.">
                            <i class="bi bi-play-circle"></i> Preview
                        </a>
                        <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                            <i class="bi bi-link-45deg"></i> Details
                        </a>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-animation">
            <div class="card portfolio-card h-100 border-0 shadow-sm">
                <div class="portfolio-img">
                    <!-- Thumbnail dari YouTube dengan multiple fallback -->
                    <img src="https://i3.ytimg.com/vi/5RWIf2AVL2U/hqdefault.jpg" 
                         class="card-img-top" 
                         alt="Safety Induction Video"
                         onerror="this.onerror=null; this.src='{{ asset('assets/img/portfolio/video-placeholder.jpg') }}';">
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">Explainer Animation</h5>
                    <p class="card-text text-muted small">Video animasi 2D untuk pendidikan</p>
                    <div class="portfolio-links mt-3">
                        <a href="#" 
                            class="btn btn-sm btn-outline-primary me-2 portfolio-preview-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#videoModal"
                            data-video-id="5RWIf2AVL2U"
                            data-title="Safety Induction Video"
                            data-description="Video safety induction yang informatif dan menarik untuk perusahaan. Menjelaskan prosedur keselamatan dengan cara yang mudah dipahami.">
                            <i class="bi bi-play-circle"></i> Preview
                        </a>
                        <a href="portfolio-details.html" class="btn btn-sm btn-primary">
                            <i class="bi bi-link-45deg"></i> Details
                        </a>
                    </div>
                </div>
            </div>
          </div>

          

         

         

          

          

        </div>
        </div>

      <!-- Portfolio Modal -->
      <div class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div class="portfolio-modal-content">
                <!-- Content will be dynamically loaded here -->
              </div>
            </div>
            <div class="modal-footer border-0">
              <div class="portfolio-description p-3">
                <!-- Description will be dynamically loaded here -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Portfolio Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">
      

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-lg-5">
            <img src="{{ asset('assets/img/stats.jpg') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <h3 class="fw-bold fs-2 mb-3">Pencapaian dan Pengalaman Kami</h3>
            <p>
              Dengan pengalaman bertahun-tahun dalam industri teknologi kreatif, kami telah membantu ratusan klien mengembangkan solusi digital yang inovatif dan efektif untuk bisnis mereka.
            </p>

            <div class="row gy-4">

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Klien Puas</strong> <span>yang telah kami layani</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-journal-richtext flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Proyek Selesai</strong> <span>dalam berbagai kategori</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-clock-history flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tahun Pengalaman</strong> <span>melayani berbagai industri</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-award flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Penghargaan</strong> <span>di bidang kreatif & teknologi</span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">
      

      <img src="{{ asset('assets/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt=""> --}}
                <h3>Ahmad Rizki</h3>
                <h4>CEO - Tech Startup</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>CreativeTech Agency telah membantu kami mengembangkan platform digital yang luar biasa. Tim mereka sangat profesional dan memahami kebutuhan bisnis kami dengan baik.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt=""> --}}
                <h3>Sarah Putri</h3>
                <h4>Marketing Manager</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Strategi digital marketing yang dirancang oleh CreativeTech berhasil meningkatkan engagement dan konversi brand kami secara signifikan.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt=""> --}}
                <h3>Budi Santoso</h3>
                <h4>Pemilik UKM</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Website dan sistem manajemen yang dikembangkan sangat membantu operasional bisnis kami. Pelayanan yang ramah dan responsif.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt=""> --}}
                <h3>Diana Wijaya</h3>
                <h4>Content Creator</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Kualitas video dan animasi yang dihasilkan sangat profesional. Tim kreatif mereka berhasil menerjemahkan ide-ide kami menjadi konten yang menarik.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt=""> --}}
                <h3>Rudi Hartono</h3>
                <h4>Direktur Perusahaan</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Solusi IT yang diberikan CreativeTech sangat komprehensif dan sesuai dengan kebutuhan perusahaan kami. Mereka tidak hanya memberikan produk, tapi juga konsultasi yang berharga.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim Kami</h2>
        <p>Profesional Berpengalaman</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-15 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('images/team-1.JPG') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/dikhsan_tibong?igsh=d3VkYm4xcGxkdzd4"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/dikhsan-dwirangga-tibong-276a88300/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dikhsan Dwirangga Tibong</h4>
                <span>CEO/Founder</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-15 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('images/team-2.JPG') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Diky Ardikawiratama</h4>
                <span>Commissioner/Founder</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-15 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('images/team-3.JPG') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Chalifahdien Hamud</h4>
                <span>General Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-15 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('images/team-4.JPG')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Febri Nusa Bakti</h4>
                <span>Creative Lead</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-15 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('images/team-5.JPG')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>La Ode Pali Aqsan</h4>
                <span>Marketing Lead</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Add updated team styles -->
    <style>
      /* Team Section Styles */
      .team .team-member {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        width: 100%;
        margin-bottom: 30px;
      }

      .team .col-lg-15 {
        width: 20%;
        padding: 0 15px;
      }

      @media (max-width: 1200px) {
        .team .col-lg-15 {
          width: 33.333%;
        }
      }

      @media (max-width: 768px) {
        .team .col-lg-15 {
          width: 50%;
        }
      }

      @media (max-width: 576px) {
        .team .col-lg-15 {
          width: 100%;
        }
      }

      .team .member-img {
        position: relative;
        overflow: hidden;
        aspect-ratio: 1/1;
        background: #f5f5f5;
      }

      .team .member-img::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transform: translateX(-100%);
        animation: loading 1.5s infinite;
      }

      .team .member-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      .team .member-img img.loaded {
        opacity: 1;
      }

      @keyframes loading {
        0% {
          transform: translateX(-100%);
        }
        100% {
          transform: translateX(100%);
        }
      }

      .team .member-info {
        padding: 25px 15px;
        text-align: center;
      }

      .team .member-info h4 {
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 18px;
        color: var(--color-secondary);
      }

      .team .member-info span {
        display: block;
        font-size: 13px;
        font-weight: 400;
        color: #6c757d;
      }

      .team .member-img .social {
        position: absolute;
        inset: 0;
        background: rgba(var(--color-primary-rgb), 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        opacity: 0;
        transition: 0.3s;
      }

      .team .member-img .social a {
        color: var(--color-white);
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(var(--color-white-rgb), 0.5);
        border-radius: 50%;
        transition: 0.3s;
        text-decoration: none;
      }

      .team .member-img .social a:hover {
        color: var(--color-primary);
        background: var(--color-white);
      }

      .team .member-img:hover .social {
        opacity: 1;
      }
    </style>

    <!-- Add lazy loading script -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Get all team member images
        const teamImages = document.querySelectorAll('.team .member-img img');
        
        // Create an Intersection Observer
        const imageObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const img = entry.target;
              // Set the src attribute to load the image
              img.src = img.dataset.src;
              
              // Add loaded class when image is loaded
              img.onload = () => {
                img.classList.add('loaded');
              };
              
              // Stop observing the image
              observer.unobserve(img);
            }
          });
        });

        // Observe each image
        teamImages.forEach(img => {
          // Store the src in data-src and remove src
          img.dataset.src = img.src;
          img.removeAttribute('src');
          
          // Start observing the image
          imageObserver.observe(img);
        });
      });
    </script>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.85579094164!2d122.43624985595072!3d-3.9984923685386584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98ecde0b7e6a05%3A0x168d0c5d8469c659!2sKota%20Kendari%2C%20Sulawesi%20Tenggara!5e0!3m2!1sid!2sid!4v1709799171599!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Jl. Bunggasi, Kota Kendari, Sulawesi Tenggara</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 822 9311 8410</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>ctech@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

@endsection

@section('scripts')
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize Isotope for filtering
    let portfolioIsotope = document.querySelector('.row.g-4');
    if (portfolioIsotope) {
      // Wait for images to load
      imagesLoaded(portfolioIsotope, function() {
        let iso = new Isotope(portfolioIsotope, {
          itemSelector: '.portfolio-item',
          layoutMode: 'fitRows',
          transitionDuration: '0.4s'
        });

        document.querySelectorAll('.portfolio-filters li').forEach(function(filter) {
          filter.addEventListener('click', function(e) {
            e.preventDefault();
            
            document.querySelector('.portfolio-filters .filter-active').classList.remove('filter-active');
            this.classList.add('filter-active');
            
            iso.arrange({
              filter: this.getAttribute('data-filter') === '*' ? '*' : '.' + this.getAttribute('data-filter')
            });
          });
        });
      });
    }

    // Handle both video and image previews
    document.querySelectorAll('.portfolio-preview-btn').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        const title = this.getAttribute('data-title');
        const description = this.getAttribute('data-description');
        const videoId = this.getAttribute('data-video-id');
        
        // Get the portfolio item's parent to check if it's an animation
        const portfolioItem = this.closest('.portfolio-item');
        const isAnimation = portfolioItem.classList.contains('filter-animation');

        if (isAnimation && videoId) {
          // Show video modal for animation items
          const videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
          const modalTitle = document.querySelector('#videoModal .modal-title');
          const modalContent = document.querySelector('#videoModal .modal-body');
          const modalDescription = document.querySelector('#videoModal .portfolio-description');

          modalTitle.textContent = title;
          modalContent.innerHTML = `
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1" 
                      title="YouTube video" 
                      allowfullscreen 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
              </iframe>
            </div>
          `;
          modalDescription.innerHTML = `
            <h6 class="mb-2">${title}</h6>
            <p class="text-muted mb-0">${description}</p>
          `;

          videoModal.show();

          // Clean up video when modal is hidden
          document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
            modalContent.innerHTML = '';
          });
        } else {
          // Show image modal for non-animation items
          const portfolioModal = new bootstrap.Modal(document.getElementById('portfolioModal'));
          const modalTitle = document.querySelector('.portfolio-modal .modal-title');
          const modalContent = document.querySelector('.portfolio-modal-content');
          const modalDescription = document.querySelector('.portfolio-modal .portfolio-description');
          const src = this.getAttribute('href');

          modalTitle.textContent = title;
          modalContent.innerHTML = `<img src="${src}" class="img-fluid portfolio-preview" alt="${title}">`;
          modalDescription.innerHTML = `
            <h6 class="mb-2">${title}</h6>
            <p class="text-muted mb-0">${description}</p>
          `;

          portfolioModal.show();
        }
      });
    });
  });
  </script>

  <!-- Portfolio Modal Styles -->
  <style>
  .portfolio-modal .modal-dialog {
    max-width: 800px;
  }

  .portfolio-modal .modal-content {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
  }

  .portfolio-modal .modal-header {
    padding: 1rem 1.5rem;
    background: #f8f9fa;
  }

  .portfolio-modal .modal-title {
    font-weight: 600;
    color: var(--primary-color);
  }

  .portfolio-modal .portfolio-preview {
    width: 100%;
    height: auto;
    display: block;
  }

  .portfolio-modal .portfolio-description {
    width: 100%;
    background: #f8f9fa;
    padding: 1.5rem;
  }

  .portfolio-modal .btn-close {
    background-color: var(--primary-color);
    opacity: 1;
    padding: 0.5rem;
    margin: 0;
    border-radius: 50%;
  }

  .portfolio-modal .btn-close:hover {
    opacity: 0.8;
  }

  .portfolio-modal .ratio {
    background: #000;
  }

  .portfolio-modal video {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }
  </style>

  <!-- Add this CSS to ensure uniform card sizes -->
  <style>
  .portfolio .portfolio-item {
    margin-bottom: 30px;
  }

  .portfolio .portfolio-content {
    position: relative;
    overflow: hidden;
    height: 300px; /* Fixed height for all cards */
  }

  .portfolio .portfolio-content img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* This ensures images cover the area without distortion */
  }

  .portfolio .portfolio-info {
    background: rgba(var(--color-secondary-rgb), 0.9);
    padding: 30px;
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .portfolio .portfolio-content:hover .portfolio-info {
    opacity: 1;
  }

  .portfolio .portfolio-info h4 {
    font-size: 20px;
    color: var(--color-white);
    font-weight: 600;
    margin-bottom: 10px;
  }

  .portfolio .portfolio-info p {
    color: rgba(var(--color-white-rgb), 0.8);
    margin-bottom: 20px;
  }

  .portfolio .portfolio-info .preview-link,
  .portfolio .portfolio-info .details-link {
    color: rgba(var(--color-white-rgb), 0.8);
    font-size: 24px;
    margin: 0 8px;
  }

  .portfolio .portfolio-info .preview-link:hover,
  .portfolio .portfolio-info .details-link:hover {
    color: var(--color-white);
  }
  </style>

  <!-- Portfolio Styles -->
  <style>
  /* Portfolio Styles */
  .portfolio-filters {
    list-style: none;
  }

  .portfolio-filters li {
    cursor: pointer;
    font-size: 14px;
    transition: all 0.3s ease;
  }

  .portfolio-filters .filter-active {
    background: var(--primary-color);
    color: #fff;
    border-color: var(--primary-color);
  }

  .portfolio-card {
    transition: all 0.3s ease;
    background: #fff;
  }

  .portfolio-card:hover {
    transform: translateY(-5px);
  }

  .portfolio-img {
    height: 200px;
    overflow: hidden;
    position: relative;
  }

  .portfolio-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .card-body {
    padding: 1.25rem;
  }

  .portfolio-links {
    display: flex;
    gap: 0.5rem;
  }

  .portfolio-links a {
    font-size: 13px;
  }

  .portfolio-links i {
    font-size: 14px;
  }

  /* Filter animation styles */
  .portfolio-item {
    transition: transform 0.4s ease-in-out, opacity 0.4s ease-in-out;
  }

  .portfolio-item.isotope-hidden {
    transform: scale(0.2);
    opacity: 0;
    z-index: -1;
  }

  /* Filter animation styles */
  .portfolio-item {
    transition: transform 0.4s ease-in-out, opacity 0.4s ease-in-out;
  }

  .portfolio-item.isotope-hidden {
    transform: scale(0.2);
    opacity: 0;
    z-index: -1;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .portfolio-img {
      height: 180px;
    }
    
    .portfolio-filters li {
      font-size: 12px;
      padding: 6px 12px;
    }
  }
  </style>

  <!-- Video Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <!-- Video content will be inserted here -->
        </div>
        <div class="modal-footer border-0">
          <div class="portfolio-description p-3 w-100">
            <!-- Description will be inserted here -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add these styles -->
  <style>
  #videoModal .modal-dialog {
    max-width: 800px;
  }

  #videoModal .modal-content {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
  }

  #videoModal .modal-body {
    background: #000;
  }

  #videoModal .ratio {
    margin-bottom: 0;
  }

  #videoModal iframe {
    border: none;
  }

  #videoModal .portfolio-description {
    background: #f8f9fa;
    border-radius: 0 0 15px 15px;
  }

  .portfolio-preview-btn i.bi-play-circle {
    color: #0d6efd;
    margin-right: 4px;
  }

  /* Hover effect for animation items */
  .filter-animation .portfolio-img::before {
    content: '\F4F9';  /* Bootstrap Icons play circle code */
    font-family: "bootstrap-icons";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 3rem;
    color: #fff;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 2;
  }

  .filter-animation .portfolio-img::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.4);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
  }

  .filter-animation .portfolio-img:hover::before,
  .filter-animation .portfolio-img:hover::after {
    opacity: 1;
  }
  </style>

  <!-- Add this style -->
  <style>
  .filter-video .portfolio-img::before {
    content: '\F4F9';  /* Bootstrap Icons play circle code */
    font-family: "bootstrap-icons";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 3rem;
    color: #fff;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 2;
  }

  .filter-video .portfolio-img::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.4);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
  }

  .filter-video .portfolio-img:hover::before,
  .filter-video .portfolio-img:hover::after {
    opacity: 1;
  }
  </style>

  <!-- Handle video modal -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const videoModal = document.getElementById('videoModal');
    
    if (videoModal) {
      videoModal.addEventListener('hidden.bs.modal', function () {
        // Get the iframe
        const videoFrame = this.querySelector('iframe');
        if (videoFrame) {
          // Reset iframe src to stop video
          videoFrame.src = videoFrame.src;
        }
        
        // Remove any lingering backdrop
        const backdrop = document.querySelector('.modal-backdrop');
        if (backdrop) {
          backdrop.remove();
        }
        
        // Reset body classes
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
      });

      videoModal.addEventListener('show.bs.modal', function () {
        // Clean up any existing backdrop before showing new modal
        const existingBackdrop = document.querySelector('.modal-backdrop');
        if (existingBackdrop) {
          existingBackdrop.remove();
        }
      });
    }
  });
  </script>

  <!-- Add this style -->
  <style>
  /* Ensure modal backdrop is properly removed */
  .modal-backdrop {
    opacity: 0.5;
  }
  
  .modal-backdrop.fade {
    opacity: 0;
  }
  
  .modal-backdrop.show {
    opacity: 0.5;
  }
  
  /* Prevent body scroll when modal is open */
  body.modal-open {
    overflow: hidden;
    padding-right: 0 !important;
  }
  
  /* Ensure modal is properly hidden */
  .modal.fade {
    background: rgba(0, 0, 0, 0);
  }
  
  .modal.show {
    background: rgba(0, 0, 0, 0.5);
  }
  </style>

  <!-- Add this script before closing body tag -->
  <script>
    // Video Play Button Animation
    document.addEventListener('DOMContentLoaded', function() {
      const playBtn = document.querySelector('.play-btn');
      const cursor = document.createElement('div');
      cursor.className = 'cursor';
      document.body.appendChild(cursor);

      // Show cursor animation every 5 seconds
      setInterval(() => {
        cursor.style.display = 'block';
        
        // Calculate play button position
        const playBtnRect = playBtn.getBoundingClientRect();
        const startX = playBtnRect.left + window.scrollX - 50;
        const startY = playBtnRect.top + window.scrollY - 50;
        const endX = playBtnRect.left + window.scrollX + (playBtnRect.width / 2) - 10;
        const endY = playBtnRect.top + window.scrollY + (playBtnRect.height / 2) - 10;

        // Animate cursor
        cursor.style.left = `${endX}px`;
        cursor.style.top = `${endY}px`;

        // Hide cursor and trigger click animation after movement
        setTimeout(() => {
          cursor.style.display = 'none';
          playBtn.style.transform = 'scale(0.9)';
          setTimeout(() => {
            playBtn.style.transform = 'scale(1)';
          }, 200);
        }, 3000);
      }, 6000);

      // Add click animation
      playBtn.addEventListener('click', function() {
        this.style.transform = 'scale(0.9)';
        setTimeout(() => {
          this.style.transform = 'scale(1)';
        }, 200);
      });
    });
  </script>

  <style>
  /* Portfolio thumbnail styles */
  .portfolio-img {
    position: relative;
    overflow: hidden;
    background: #f8f9fa; /* Light background while loading */
  }

  .portfolio-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .portfolio-img img:hover {
    transform: scale(1.05);
  }

  /* Remove loading animation */
  /* .portfolio-img::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(
      to right,
      transparent 0%,
      rgba(255,255,255,0.3) 50%,
      transparent 100%
    );
    animation: loading 1s infinite;
    z-index: 1;
  }

  @keyframes loading {
    from {
      left: -100%;
    }
    to {
      left: 100%;
    }
  } */

  /* Hide loading animation once image is loaded */
  /* .portfolio-img img.loaded + .portfolio-img::before {
    display: none;
  } */
  </style>

  <script>
  // Remove loading animation related code
  document.addEventListener('DOMContentLoaded', function() {
    const portfolioImages = document.querySelectorAll('.portfolio-img img');
    portfolioImages.forEach(img => {
      if (img.complete) {
        img.classList.add('loaded');
      } else {
        img.addEventListener('load', function() {
          this.classList.add('loaded');
        });
      }
    });
  });
  </script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Handle video thumbnails
    const videoThumbnails = document.querySelectorAll('.portfolio-img img');
    
    videoThumbnails.forEach(img => {
      // Try loading the image
      const testImage = new Image();
      testImage.src = img.src;
      
      testImage.onerror = function() {
        // If YouTube thumbnail fails, try the default thumbnail
        const videoId = img.src.split('/').pop().split('.')[0];
        img.src = `https://i.ytimg.com/vi/${videoId}/default.jpg`;
        
        // If that also fails, use our placeholder
        img.onerror = function() {
          img.src = '{{ asset('assets/img/portfolio/video-placeholder.jpg') }}';
          // Add play button overlay
          const playButton = document.createElement('div');
          playButton.className = 'play-overlay';
          img.parentElement.appendChild(playButton);
        }
      }
    });
  });
  </script>

  <style>
  .portfolio-img {
    position: relative;
    overflow: hidden;
    background: #f8f9fa;
    min-height: 200px;
  }

  .portfolio-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .play-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .play-overlay::after {
    content: '\F4F9';
    font-family: "bootstrap-icons";
    font-size: 2rem;
    color: var(--primary-color);
  }

  .portfolio-img:hover img {
    transform: scale(1.05);
  }
  </style>
@endsection