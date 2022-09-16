@extends('website.layouts.index')


@section('content')
    <div class="slider-area slider-layout1">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-4" class="slides">
                <img src="{{ asset('contents/website') }}/img/slider/slide1-1.jpg" alt="slider" title="#slider-direction-1" />
                <img src="{{ asset('contents/website') }}/img/slider/slide1-2.jpg" alt="slider" title="#slider-direction-2" />
                <img src="{{ asset('contents/website') }}/img/slider/slide1-3.jpg" alt="slider" title="#slider-direction-3" />
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="slider-sub-text">The Best Cleaning Service Ever!</div>
                            <h1 class="slider-big-text">Certified Company</h1>
                            <div class="slider-paragraph">Our best-in-class WordPress solution, 
                                with additional optimization to make running a WooCommerce online 
                                store easy. Our prices are clear and straight forward so you can.</div>
                            <div class="slider-btn-area">
                                <a href="#" class="item-btn-fill">Take Our Service
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="slider-sub-text">The Best Cleaning Service Ever!</div>
                            <h1 class="slider-big-text">Certified Company</h1>
                            <div class="slider-paragraph">Our best-in-class WordPress solution, 
                                with additional optimization to make running a WooCommerce online 
                                store easy. Our prices are clear and straight forward so you can.</div>
                            <div class="slider-btn-area">
                                <a href="#" class="item-btn-fill">Take Our Service
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-3">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="slider-sub-text">The Best Cleaning Service Ever!</div>
                            <h1 class="slider-big-text">Certified Company</h1>
                            <div class="slider-paragraph">Our best-in-class WordPress solution, 
                                with additional optimization to make running a WooCommerce online 
                                store easy. Our prices are clear and straight forward so you can.</div>
                            <div class="slider-btn-area">
                                <a href="#" class="item-btn-fill">Take Our Service
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Slider Area End Here -->
    <!-- About Us Area Start Here -->
    <section class="section-bubble section-padding-md-2">
        <div class="container">
            <div class="row gutters-50 d-flex align-items-center">
                <div class="col-xl-7">
                    <div class="about-box-layout3">
                        <div class="item-icon shape1">
                            <img src="{{ asset('contents/website') }}/img/figure/icon-shape1.png" alt="shape">
                        </div>
                        <div class="item-icon shape2">
                            <img src="{{ asset('contents/website') }}/img/figure/icon-shape2.png" alt="shape">
                        </div>
                        <div class="item-icon shape3">
                            <img src="{{ asset('contents/website') }}/img/figure/icon-shape3.png" alt="shape">
                        </div>
                        <div class="item-icon shape4">
                            <img src="{{ asset('contents/website') }}/img/figure/icon-shape4.png" alt="shape">
                        </div>
                        <div class="item-img">
                            <img src="{{ asset('contents/website') }}/img/figure/figure5.png" alt="{{ asset('contents/website') }}/img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-box-layout4">
                        <h2 class="item-title">Making Your House <span>As Good As New</span></h2>
                        <p>Spa isa  newsimply dummy text of the printing and type settingare 
                            industrLorem Ipsum has been the industry's standard dummy text everty 
                            since the when an unknown centuries, but also the leap into electronic 
                            typesetting, remaining essentially.</p>
                        <div class="service-list">
                            <ul>
                                <li>Experienced Team</li>
                                <li>Keep the same cleaner for every visit</li>
                                <li>One-off, weekly or fortnightly visits</li>
                                <li>Book, manage &amp; pay online</li>
                            </ul>
                        </div>
                        <div class="action-area">
                            <a href="#" class="btn-fill-sm bg-accent text-primarytext btn-slide-hover">Book a Service<i class="fas fa-angle-right"></i></a>
                            <div class="phone-number"><i class="flaticon-phone-call"></i>+ 985 8844 000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End Here -->
    <!-- Service Area Start Here -->
    <section class="section-padding-lg bg-common bg-aash" data-bg-image="{{ asset('contents/website') }}/img/figure/bg-shape1.png">
        <div class="container">
            <div class="heading-layout1">
                <h2>Cleaning Services</h2>
                <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium dol
                    oremque laudantium, totam remeaque ipsa</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-box-layout1">
                        <div class="item-img">
                            <img src="{{ asset('contents/website') }}/img/service/service.jpg" alt="Thumb">
                        </div>
                        <div class="item-middle-content">
                            <div class="item-icon">
                                <div class="home-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="single-service1.html">Residential</a></h3>
                            <div class="serivce-list">
                                <ul>
                                    <li>Kitchen</li>
                                    <li>Bathrooms</li>
                                    <li>Bedrooms</li>
                                    <li>Windows</li>
                                    <li>Carpet</li>
                                    <li>Move in/out</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-box-layout1">
                        <div class="item-img">
                            <img src="{{ asset('contents/website') }}/img/service/service1.jpg" alt="Thumb">
                        </div>
                        <div class="item-middle-content">
                            <div class="item-icon">
                                <div class="home-icon">
                                    <i class="far fa-building"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="single-service1.html">Commercial</a></h3>
                            <div class="serivce-list">
                                <ul>
                                    <li>Kitchen</li>
                                    <li>Bathrooms</li>
                                    <li>Bedrooms</li>
                                    <li>Windows</li>
                                    <li>Carpet</li>
                                    <li>Move in/out</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-block d-md-none d-lg-block col-12">
                    <div class="service-box-layout1">
                        <div class="item-img">
                            <img src="{{ asset('contents/website') }}/img/service/service2.jpg" alt="Thumb">
                        </div>
                        <div class="item-middle-content">
                            <div class="item-icon">
                                <div class="home-icon">
                                        <i class="fas fa-car"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="single-service1.html">Vehicle Wash</a></h3>
                            <div class="serivce-list">
                                <ul>
                                    <li>Kitchen</li>
                                    <li>Bathrooms</li>
                                    <li>Bedrooms</li>
                                    <li>Windows</li>
                                    <li>Carpet</li>
                                    <li>Move in/out</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End Here -->
    <!-- Call To Action Area Start Here -->
    <section class="action-wrap-layout1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="action-box-layout1">
                        <h2 class="item-title">Get started with your free estimate</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="action-box-layout1">
                        <div class="item-img bottom-bubble">
                            <img src="{{ asset('contents/website') }}/img/figure/figure4.png" alt="{{ asset('contents/website') }}/img">
                        </div>
                        <a href="#" class="btn-fill-md hover-textprimary bg-accent text-primarytext">Get an Estimate<i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End Here -->
    <!-- About Us Area Start Here -->
    <section class="section-padding-md-2 section-bubble">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-12">
                    <div class="about-box-layout1">
                        <h2 class="item-title">Our Goal is to Wow With Every Clean</h2>
                        <div class="item-subtitle">There are many variations of passages of Lorem Ipsum available, 
                            but the majority have suffered alteration in some form.</div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority 
                            have suffered alteration in some form, by injected humour, or randomised 
                            words which don't look even slightly believable. some form, by injected humour, 
                            some form, by injected humour.</p>
                        <div class="list-item">
                            <ul>
                                <li>
                                    <h3>Customer Focused Reviews</h3>
                                    <p>Aorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod tempor incididunt ut labore et dolore.</p>
                                </li>
                                <li>
                                    <h3>We Are Committed</h3>
                                    <p>Aorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod tempor incididunt ut labore et dolore.</p>
                                </li>
                                <li>
                                    <h3>Regular &amp; Monthly Cleaning</h3>
                                    <p>Aorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                        eiusmod tempor incididunt ut labore et dolore.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-12">
                    <div class="about-box-layout2">
                        <h3 class="item-title">Request An Estimate</h3>
                        <form class="contact-form-box" id="contact-form">
                            <div class="row gutters-10">
                                <div class="col-12 form-group">
                                    <select class="select2">
                                        <option value="0">Residential</option>
                                        <option value="1">Residential</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Apartment</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <select class="select2">
                                        <option value="0">Property Type</option>
                                        <option value="1">Residential</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Apartment</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <select class="select2">
                                        <option value="0">-- Approx SF --</option>
                                        <option value="1">400</option>
                                        <option value="2">200</option>
                                        <option value="3">600</option>
                                        <option value="4">300</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <select class="select2">
                                        <option value="0">-- Bedrooms --</option>
                                        <option value="1">Residential</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Apartment</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <select class="select2">
                                        <option value="0">-- Bathrooms --</option>
                                        <option value="1">Residential</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Apartment</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <select class="select2">
                                        <option value="0">-- Frequency --</option>
                                        <option value="1">Residential</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Apartment</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <input type="text" placeholder="ZIP Code" class="form-control" name="name" data-error="zip code field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-12 form-group datetime-picker">
                                    <i class="far fa-calendar-alt"></i>
                                    <input type="text" class="form-control rt-date" placeholder="dd/mm/yy" name="date" id="form-date" data-error="Subject field is required" required/>
                                </div>
                                <div class="col-md-6 col-12 form-group datetime-picker">
                                    <i class="far fa-clock"></i>
                                    <input type="text" class="form-control rt-time" placeholder="Time" name="time" id="form-time" data-error="Subject field is required" required/>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-12 form-group">
                                    <input type="text" placeholder="Phone" class="form-control" name="phone" data-error="Phone field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="email" placeholder="E-mail Address" class="form-control" name="email" data-error="email field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group mg-b-20">
                                    <textarea placeholder="Address" class="textarea form-control" name="message" id="form-message" rows="2" cols="20" 
                                    data-error="Message field is required" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" class="fw-btn-fill bg-accent text-primarytext">Book Now<i class="fas fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="form-response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End Here -->
    <!-- Banner Area Start Here -->
    <section class="banner-wrap-layout1" data-bg-image="{{ asset('contents/website') }}/img/figure/banner-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="col-xl-6 col-12">
                    <div class="banner-box-layout1">
                        <h2 class="item-title">Together <span>We'll Explore</span> New Things</h2>
                        <a href="#" class="btn-fill-md btn-slide-hover bg-accent text-primarytext">Read More<i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End Here -->
    <!-- Pricing Table Area Start Here -->
    <section class="section-padding-xl bg-Primary section-shape2">
        <div class="container">
            <div class="heading-layout1 mg-b-60">
                <h2 class="text-white">Affordable Pricing</h2>
                <p class="text-textprimary">Perspiciatis unde omnis iste natus error sit voluptatem accusantium dol
                    oremque laudantium, totam remeaque ipsa</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-box-layout1">
                        <div class="item-icon">
                            <i class="flaticon-clean"></i>
                        </div>
                        <h3 class="item-title">Basic</h3>
                        <div class="item-feature">
                            <ul>
                                <li><i class="fas fa-check"></i>Surfaces Hand Wiped</li>
                                <li><i class="fas fa-check"></i>Floors Cleaned</li>
                                <li><i class="fas fa-check"></i>General Dusting</li>
                                <li><i class="fas fa-check"></i>Cobwebs Removed</li>
                                <li><i class="fas fa-check"></i>Doors Cleaned</li>
                            </ul>
                        </div>
                        <div class="item-price">
                            <div class="item-currency">$49</div>
                            <div class="item-duration">/per mo</div>
                        </div>
                        <a href="#" class="btn-fill-xl bg-accent text-primarytext">Get It Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box-layout1">
                        <div class="popular-text">Popular Sale!</div>
                        <div class="item-icon popular-shape">
                            <i class="flaticon-mop"></i>
                        </div>
                        <h3 class="item-title">Standard</h3>
                        <div class="item-feature">
                            <ul>
                                <li><i class="fas fa-check"></i>Surfaces Hand Wiped</li>
                                <li><i class="fas fa-check"></i>Floors Cleaned</li>
                                <li><i class="fas fa-check"></i>General Dusting</li>
                                <li><i class="fas fa-check"></i>Cobwebs Removed</li>
                                <li><i class="fas fa-check"></i>Doors Cleaned</li>
                            </ul>
                        </div>
                        <div class="item-price">
                            <div class="item-currency">$99</div>
                            <div class="item-duration">/per mo</div>
                        </div>
                        <a href="#" class="btn-fill-xl bg-accent text-primarytext">Get It Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box-layout1">
                        <div class="item-icon">
                            <i class="flaticon-clean-2"></i>
                        </div>
                        <h3 class="item-title">Premium</h3>
                        <div class="item-feature">
                            <ul>
                                <li><i class="fas fa-check"></i>Surfaces Hand Wiped</li>
                                <li><i class="fas fa-check"></i>Floors Cleaned</li>
                                <li><i class="fas fa-check"></i>General Dusting</li>
                                <li><i class="fas fa-check"></i>Cobwebs Removed</li>
                                <li><i class="fas fa-check"></i>Doors Cleaned</li>
                            </ul>
                        </div>
                        <div class="item-price">
                            <div class="item-currency">$199</div>
                            <div class="item-duration">/per mo</div>
                        </div>
                        <a href="#" class="btn-fill-xl bg-accent text-primarytext">Get It Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table Area End Here -->
    <!-- Team Area Start Here -->
    <section class="section-padding-lg-3 section-bubble">
        <div class="container">
            <div class="heading-layout1">
                <h2>Our Working Experts</h2>
                <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium dol
                    oremque laudantium, totam remeaque ipsa</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team-box-layout1">
                        <div class="item-img">
                            <img src="{{ asset('contents/website') }}/img/team/team1.png" alt="team-thumb">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="single-team.html">Richard Powel</a></h3>
                            <div class="item-subtitle">Office Cleaner</div>
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="team-box-layout1">
                        <div class="item-img">
                            <img src="{{ asset('contents/website') }}/img/team/team2.png" alt="team-thumb">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="single-team.html">Merry Patel</a></h3>
                            <div class="item-subtitle">Kitchen Cleaner</div>
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-block d-md-none d-lg-block col-12">
                    <div class="team-box-layout1">
                        <div class="item-img">
                            <img src="{{ asset('contents/website') }}/img/team/team3.png" alt="team-thumb">
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="single-team.html">Johnson Jack</a></h3>
                            <div class="item-subtitle">Floor Cleaner</div>
                            <div class="item-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Area End Here -->
    <!-- Progress Area Start Here -->
    <section class="progress-wrap-layout1 section-padding-12">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-12">
                    <div class="progress-box-layout1">
                        <h2 class="item-title">All of our Specialists are Fully Trained</h2>
                        <div class="item-content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="counter-item">
                                        <div class="counter count-number" data-num="159">159</div>
                                        <div class="count-title">Project Done</div>
                                        <div class="bg-icon"><i class="far fa-thumbs-up"></i></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item">
                                        <div class="counter count-number" data-num="1900">1900</div>
                                        <div class="count-title">Happy Clients</div>
                                        <div class="bg-icon"><i class="far fa-smile"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Progress Area End Here -->
    <!-- Testimonial Area Start Here -->
    <section class="section-padding-md-4 bg-Primary bg-common" data-bg-image="{{ asset('contents/website') }}/img/figure/bg-shape.png">
        <div class="container">
            <div class="heading-layout2 mg-b-30">
                <h2 class="text-white">What’s Client’s Say<span>About Us</span></h2>
            </div>
            <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="10" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
                data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2"
                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true"
                data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="true"
                data-r-extra-large-dots="false">
                <div class="testimonial-box-layout1">
                    <p>Wimply dummy text of the printing and typesetting industryrem Ipsum has 
                        been the industry's standard dummy text ever since </p>
                    <h3 class="item-title">Steven Joes</h3>
                    <div class="item-subtitle">CEO, RT</div>
                    <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                    <div class="item-quote"><i class="fas fa-quote-right"></i></div>
                </div>
                <div class="testimonial-box-layout1">
                    <p>Wimply dummy text of the printing and typesetting industryrem Ipsum has 
                        been the industry's standard dummy text ever since </p>
                    <h3 class="item-title">Mike Tyson</h3>
                    <div class="item-subtitle">CEO, RT</div>
                    <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                    <div class="item-quote"><i class="fas fa-quote-right"></i></div>
                </div>
                <div class="testimonial-box-layout1">
                    <p>Wimply dummy text of the printing and typesetting industryrem Ipsum has 
                        been the industry's standard dummy text ever since </p>
                    <h3 class="item-title">Bobby John</h3>
                    <div class="item-subtitle">CEO, RT</div>
                    <ul class="item-rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                    <div class="item-quote"><i class="fas fa-quote-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End Here -->
    <!-- Blog Area Start Here -->
    <section class="section-padding-lg-4 section-bubble">
        <div class="container">
            <div class="heading-layout1">
                <h2> Our Latest Blogs</h2>
                <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium fa-angle-double-up
                oremque laudantium, totam remeaque ipsa</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-layout1">
                        <div class="item-img">
                            <a href="single-blog1.html"><img src="{{ asset('contents/website') }}/img/blog/blog7.jpg" alt="blog-thumb"></a>
                        </div>
                        <div class="item-content">
                            <div class="item-date"><i class="fas fa-calendar-alt"></i>24 July, 2019</div>
                            <h3 class="item-title"><a href="single-blog1.html">What is Best domin Name For Business</a></h3>
                            <div class="item-author">By Mark Wily</div>
                            <p>Aimply dummy text of the printing anden type setting industrym Ipsum has 
                                been the industry's standard.</p>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fas fa-heart"></i><span>06</span> Likes</li>
                                    <li><i class="fas fa-comment"></i><span>02</span> <a href="#">Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-layout1">
                        <div class="item-img">
                            <a href="single-blog1.html"><img src="{{ asset('contents/website') }}/img/blog/blog2.jpg" alt="blog-thumb"></a>
                        </div>
                        <div class="item-content">
                            <div class="item-date"><i class="fas fa-calendar-alt"></i>24 July, 2019</div>
                            <h3 class="item-title"><a href="single-blog1.html">What is Best domin Name For Business</a></h3>
                            <div class="item-author">By Mark Wily</div>
                            <p>Aimply dummy text of the printing anden type setting industrym Ipsum has 
                                been the industry's standard.</p>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fas fa-heart"></i><span>06</span> Likes</li>
                                    <li><i class="fas fa-comment"></i><span>02</span> <a href="#">Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-block d-md-none d-lg-block col-12">
                    <div class="blog-box-layout1">
                        <div class="item-img">
                            <a href="single-blog1.html"><img src="{{ asset('contents/website') }}/img/blog/blog3.jpg" alt="blog-thumb"></a>
                        </div>
                        <div class="item-content">
                            <div class="item-date"><i class="fas fa-calendar-alt"></i>24 July, 2019</div>
                            <h3 class="item-title"><a href="single-blog1.html">What is Best domin Name For Business</a></h3>
                            <div class="item-author">By Mark Wily</div>
                            <p>Aimply dummy text of the printing anden type setting industrym Ipsum has 
                                been the industry's standard.</p>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fas fa-heart"></i><span>06</span> Likes</li>
                                    <li><i class="fas fa-comment"></i><span>02</span> <a href="#">Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Blog Area End Here -->
@endsection
    