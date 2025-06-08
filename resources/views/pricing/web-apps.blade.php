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
          <a href="{{ $package['button_link'] }}" class="btn-pricing">{{ $package['button_text'] }}</a>
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
@endsection 