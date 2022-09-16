@extends('website.layouts.index')


@section('content')

<section class="inner-page-banner bg-common" data-bg-image="{{ asset('contents/website') }}/img/figure/breadcumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>About Us</h1>
                    <ul>
                        <li>
                            <a href="{{ route('website_index') }}">Home</a>
                        </li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- About Us Area Start Here -->
<section class="section-padding-12-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-box-layout1">
                    <div class="item-tag">Know About Us</div>
                    <h2 class="item-title">Doing Business Since 1992 in Cleaning Service.</h2>
                    <p>Chen an unknown printer took a galley of type and scrambled it to make a 
                        type specimen book. It has survived not only five centuries, but also 
                        the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Chen an unknown printer took a galley of type and scrambled it to make a 
                        type specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged.Chen an 
                        unknown printer took a galley of type and scrambled it to make a type 
                        specimen book. It has survived not only five centuries.</p>
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-box-layout6">
                    <div class="item-img">
                        <img src="{{ asset('contents/website') }}/img/figure/about1.jpg" alt="thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End Here -->
<!-- Why Choose Area End Here -->
<section class="section-padding-12-9 bg-Primary section-shape3">
    <div class="container">
        <div class="row gutters-3">
            <div class="col-lg-4">
                <div class="why-choose-box-layout2">
                    <div class="item-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Trusted Cleaners</h3>
                        <p>Ahen an unknown printer took a galley of type and 
                            scrambled it to make a type specimen five centuries.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="why-choose-box-layout2">
                    <div class="item-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">100% Satisfaction</h3>
                        <p>Ahen an unknown printer took a galley of type and 
                            scrambled it to make a type specimen five centuries.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="why-choose-box-layout2">
                    <div class="item-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Cost Effective</h3>
                        <p>Ahen an unknown printer took a galley of type and 
                            scrambled it to make a type specimen five centuries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Area End Here -->
<!-- Team Area Start Here -->
<section class="section-padding-lg-5">
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
            <div class="col-lg-4 col-12 d-block d-md-none d-lg-block">
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
<!-- Banner Area Start Here -->
<section class="banner-wrap-layout1" data-bg-image="{{ asset('contents/website') }}/img/figure/banner-bg.jpg">
    <div class="container">
        <div class="row d-flex justify-content-xl-end">
            <div class="col-xl-6 col-12">
                <div class="banner-box-layout1">
                    <h2 class="item-title">Together <span>We'll Explore</span> New Things</h2>
                    <a href="#" class="btn-fill-md bg-accent btn-slide-hover text-primarytext">Read More<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End Here -->
<!-- Process Area Start Here -->
<section class="section-padding-lg-2">
    <div class="container">
        <div class="heading-layout1">
            <h2>How It Works</h2>
            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium dol
                oremque laudantium, totam remeaque ipsa</p>
        </div>
        <div class="row">
            <div class="col-lg-4 single-process">
                <div class="process-box-layout1">
                    <div class="item-bg">
                        <img src="{{ asset('contents/website') }}/img/figure/bubble5.png" alt="thumb">
                        <div class="item-icon">
                            <i class="far fa-calendar-check"></i>
                        </div>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Book Online</h3>
                        <p>Ahen an unknown printer took a galley
                            of type and scrambled.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 single-process">
                <div class="process-box-layout1">
                    <div class="item-bg">
                        <img src="{{ asset('contents/website') }}/img/figure/bubble5.png" alt="thumb">
                        <div class="item-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Get Confirmation</h3>
                        <p>Ahen an unknown printer took a galley
                            of type and scrambled.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 single-process">
                <div class="process-box-layout1">
                    <div class="item-bg">
                        <img src="{{ asset('contents/website') }}/img/figure/bubble5.png" alt="thumb">
                        <div class="item-icon">
                            <i class="far fa-smile"></i>
                        </div>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Let’s Enjoy</h3>
                        <p>Ahen an unknown printer took a galley
                            of type and scrambled.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Process Area End Here -->
<!-- Call To Action Area Start Here -->
<section class="action-wrap-layout1 bg-lightprimary">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="action-box-layout1">
                    <h2 class="item-title mb-0">Get started with your free estimate</h2>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="action-box-layout1">
                    <div class="item-img">
                        <img src="{{ asset('contents/website') }}/img/figure/figure4.png" alt="img">
                    </div>
                    <a href="#" class="btn-fill-md btn-slide-hover bg-accent text-primarytext">Get an Estimate<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    