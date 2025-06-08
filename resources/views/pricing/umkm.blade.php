@extends('layouts.pricing')

@section('title', 'UMKM Package Pricing')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-pricing">
  <div class="container position-relative">
    <div class="row gy-5 aos-init aos-animate" data-aos="fade-in">
      <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>Paket Khusus UMKM</h2>
        <p>Solusi digital terjangkau untuk membantu UMKM Go Digital dengan layanan yang komprehensif</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
  <div class="container">
    <div class="pricing-header">
      <h3>Pilih Paket Yang Sesuai</h3>
      <p>Kami menyediakan berbagai paket khusus yang dirancang untuk kebutuhan UMKM dengan harga terjangkau</p>
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
          <h4>Keunggulan Paket UMKM Kami</h4>
          <ul>
            <li>Harga terjangkau untuk UMKM</li>
            <li>Solusi digital yang komprehensif</li>
            <li>Pendampingan teknis</li>
            <li>Pelatihan penggunaan sistem</li>
            <li>Konsultasi bisnis gratis</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4>Dukungan Yang Kami Berikan</h4>
          <ul>
            <li>Panduan digitalisasi bisnis</li>
            <li>Strategi marketing online</li>
            <li>Optimasi media sosial</li>
            <li>Integrasi marketplace</li>
            <li>Support teknis berkelanjutan</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 