@php
    $currentRoute = Route::currentRouteName();
@endphp

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            {{-- <img src="{{ asset('assets/img/logo.png') }}" alt=""> --}}
            <h1>CreativeTech</h1>
            <span class="text-blue">.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}"
                        class="nav-link {{ $currentRoute === 'home' ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('about') }}"
                        class="nav-link {{ $currentRoute === 'about' ? 'active' : '' }}">Tentang Kami</a></li>
                <li><a href="{{ route('what-we-do') }}"
                        class="nav-link {{ $currentRoute === 'what-we-do' ? 'active' : '' }}">Layanan Kami</a></li>
                <li><a href="{{ route('our-work') }}"
                        class="nav-link {{ $currentRoute === 'our-work' ? 'active' : '' }}">Portofolio</a></li>
                <li class="dropdown has-dropdown">
                    <a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="{{ route('pricing.web-apps') }}">Pengembangan Web</a></li>
                        <li><a href="{{ route('pricing.animation') }}">Animasi 2D/3D</a></li>
                        <li><a href="{{ route('pricing.video-editing') }}">Pengeditan Video</a></li>
                        <li><a href="{{ route('pricing.digital-marketing') }}">Pemasaran Digital</a></li>
                        <li><a href="{{ route('pricing.graphic-design') }}">Desain Grafis</a></li>
                        <li><a href="{{ route('pricing.umkm') }}">Paket UMKM</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('pages.contact') }}"
                        class="nav-link {{ $currentRoute === 'contact' ? 'active' : '' }}">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
