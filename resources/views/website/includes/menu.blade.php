<header class="header">
    <div id="header-topbar" class="bg-Primary">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="header-topbar-layout1">
                        <ul class="header-top-left">
                            <li class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
                            </li>
                            <li class="opening-hour"><i class="far fa-clock"></i>Mon -  Fri: 09.00am - 10.00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="header-topbar-layout1">
                        <div class="header-top-right">
                            <a href="{{ route('login') }}" class="header-top-btn">Login / Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-area">
                        <a href="{{ route('website_index') }}" class="temp-logo">
                            <img src="{{ asset('contents/website') }}/img/logo-dark.png" alt="logo" class="{{ asset('contents/website') }}/img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-end position-static">
                    <nav id="dropdown" class="template-main-menu">
                        <ul>
                           <li>
                                <a href="{{ route('website_index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('website_about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('website_services') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('website_contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 d-flex justify-content-end">
                    <div class="header-action-layout1">
                        <ul>
                            <li class="header-action-number">
                                <div class="item-icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="item-content">
                                    <div class="item-title">Quick Contact :</div>
                                    <div class="item-number">+ 985 8844 000</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>