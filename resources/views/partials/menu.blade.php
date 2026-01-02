 <!-- menu -->
 <div class="mil-menu-frame">
    <!-- frame clone -->
    <div class="mil-frame-top">
        <a href="{{ url('/') }}" class="mil-logo">
            <img src="{{ asset('ashley/img/logo/logo.png') }}" alt="CreativeTech Logo" style="height:60px;">
        </a>
        <div class="mil-menu-btn">
            <span></span>
        </div>
    </div>
    <!-- frame clone end -->
    <div class="container">
        <div class="mil-menu-content">
            <div class="row">
                <div class="col-xl-5">
                    <nav class="mil-main-menu" id="swupMenu">
                        <ul>
    <li class="{{ request()->routeIs('home') ? 'mil-active' : '' }}">
        <a href="{{ route('home') }}">Homepage</a>
    </li>
    <li class="{{ request()->routeIs('portfolio') ? 'mil-active' : '' }}">
        <a href="{{ route('portfolio') }}">Portfolio</a>
    </li>
    <li class="{{ request()->routeIs('services') ? 'mil-active' : '' }}">
        <a href="{{ route('services') }}">Services</a>
    </li>
    <li class="{{ request()->routeIs('team') ? 'mil-active' : '' }}">
        <a href="{{ route('team') }}">Team</a>
    </li>
    <li class="{{ request()->routeIs('contact') ? 'mil-active' : '' }}">
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>
                    </nav>


                </div>
                <div class="col-xl-7">

                    <div class="mil-menu-right-frame">
                        <div class="mil-animation-in">
                            <div class="mil-animation-frame">
                                <div class="mil-animation mil-position-1 mil-scale" data-value-1="2" data-value-2="2"></div>
                            </div>
                        </div>
                        <div class="mil-menu-right">
                            <div class="row">
                                <div class="col-lg-8 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Projects</h6>

                                    <ul class="mil-menu-list">
                                        <li><a href="project-1.html" class="mil-light-soft">Interior design studio</a></li>
                                        <li><a href="project-2.html" class="mil-light-soft">Home Security Camera</a></li>
                                        <li><a href="project-3.html" class="mil-light-soft">Kemia Honest Skincare</a></li>
                                        <li><a href="project-4.html" class="mil-light-soft">Cascade of Lava</a></li>
                                        <li><a href="project-5.html" class="mil-light-soft">Air Pro by Molekule</a></li>
                                        <li><a href="project-6.html" class="mil-light-soft">Tony's Chocolonely</a></li>
                                    </ul>

                                </div>
                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Useful links</h6>

                                    <ul class="mil-menu-list">
                                        <li><a href="#." class="mil-light-soft">Privacy Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Terms and conditions</a></li>
                                        <li><a href="#." class="mil-light-soft">Cookie Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Careers</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="mil-divider mil-mb-60"></div>
                            <div class="row justify-content-between">

                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Indonesia</h6>

                                    <p class="mil-light-soft mil-up">BTN UNHALU BLOK L NO 10, Kec. Kambu, Kota Kendari, Sulawesi Tenggara 93111 <span class="mil-no-wrap">+62 812 3456 7890</span></p>

                                </div>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- menu -->