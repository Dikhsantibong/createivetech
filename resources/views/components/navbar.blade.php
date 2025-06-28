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
                <li><a href="{{ route('home') }}" class="nav-link {{ $currentRoute === 'home' ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ $currentRoute === 'about' ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('what-we-do') }}" class="nav-link {{ $currentRoute === 'what-we-do' ? 'active' : '' }}">What We Do</a></li>
                <li><a href="{{ route('our-work') }}" class="nav-link {{ $currentRoute === 'our-work' ? 'active' : '' }}">Our Work</a></li>
                <li class="dropdown has-dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul class="dd-box-shadow">
                        <li><a href="{{ route('pricing.web-apps') }}">Web Development</a></li>
                        <li><a href="{{ route('pricing.animation') }}">2D/3D Animation</a></li>
                        <li><a href="{{ route('pricing.video-editing') }}">Video Editing</a></li>
                        <li><a href="{{ route('pricing.digital-marketing') }}">Digital Marketing</a></li>
                        <li><a href="{{ route('pricing.graphic-design') }}">Graphic Design</a></li>
                        <li><a href="{{ route('pricing.umkm') }}">UMKM Package</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ $currentRoute === 'contact' ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>