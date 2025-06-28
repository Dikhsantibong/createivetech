@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <img src="{{ asset('assets/img/hero-bg.png') }}" alt="" data-aos="fade-in">
  <div class="container">
    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-8 col-lg-10">
        <h2>About Us<span>.</span></h2>
        <p class="hero-quote">"Innovation is not just about technology, it's about creating solutions that make a difference in people's lives."</p>
      </div>
    </div>
  </div>
</section>

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
</section>

<!-- Features Section -->
<section id="features" class="features section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Kenapa Memilih Kami?</h2>
    <p>Klien Puas dengan Layanan Kami</p>
  </div>

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
        </div>

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-grid flex-shrink-0"></i>
          <div>
            <h4>Layanan Terintegrasi</h4>
            <p>Semua solusi digital yang Anda butuhkan ada dalam satu atap.</p>
          </div>
        </div>

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-lightbulb flex-shrink-0"></i>
          <div>
            <h4>Inovasi Berkelanjutan</h4>
            <p>Selalu mengikuti tren terbaru di dunia teknologi dan desain untuk menghadirkan solusi yang relevan.</p>
          </div>
        </div>

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-diagram-3 flex-shrink-0"></i>
          <div>
            <h4>Proses Kerja Sistematis</h4>
            <p>Analisis kebutuhan, pengembangan konsep, produksi dan eksekusi, serta monitoring dan evaluasi yang terstruktur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Team Section -->
<section id="team" class="team section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Tim Kami</h2>
    <p>Profesional Berpengalaman</p>
  </div>

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
      </div>

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
      </div>

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
      </div>

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
      </div>

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
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
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

  // Add lazy loading for team images
  document.addEventListener('DOMContentLoaded', function() {
    const teamImages = document.querySelectorAll('.team .member-img img');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.classList.add('loaded');
          observer.unobserve(img);
        }
      });
    });

    teamImages.forEach(img => {
      imageObserver.observe(img);
    });
  });
</script>
@endsection

@section('styles')
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
  }

  .team .member-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    transition: opacity 0.3s ease;
  }

  .team .member-img img.loaded {
    opacity: 1;
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
@endsection
