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
          <a href="{{ $package['button_link'] }}" class="btn-pricing">{{ $package['button_text'] }}</a>
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
@endsection 