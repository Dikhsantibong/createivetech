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
          <a href="{{ $package['button_link'] }}" class="btn-pricing">{{ $package['button_text'] }}</a>
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
@endsection 