@extends('website.includes.master')

@section('title')
    About Us
@endsection

@section('content')

    <!--Page Title-->
    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/about22.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- about-section -->
    <section class="about-section about-page pb-0">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box">
                                <figure class="image"><img
                                            src="{{ URL::asset('website/assets/images/resource/about-11.jpg') }}"
                                            alt=""></figure>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h5>About</h5>
                                    <h2>PrestigeProperties</h2>
                                </div>
                                <div class="text">
                                    <p>Welcome to PrestigeProperties, where we're dedicated to transforming your real
                                        estate aspirations into reality. With a passion for excellence and a commitment
                                        to customer satisfaction, we're here to guide you through every step of your
                                        real estate journey.</p>

                                </div>
                                <ul class="list clearfix">
                                    <li>Trusted professionals dedicated to your real estate success.</li>
                                    <li>Comprehensive listings tailored to your needs and preferences.</li>
                                    <li>Personalized support from browsing to closing the deal.</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="{{ route('contactus') }}" class="theme-btn btn-one">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- feature-style-three -->
    <section class="feature-style-three centred pb-110">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Our Services</h5>
                <h2>Property Services</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-1"></i></div>
                        <h4>Dream Partners</h4>
                        <p>Your dedicated dream allies in realizing your real estate aspirations.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-26"></i></div>
                        <h4>Expert Guidance</h4>
                        <p>Navigate the real estate journey with confidence through our knowledgeable support.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-21"></i></div>
                        <h4>Seamless Experience</h4>
                        <p>Enjoy a smooth and hassle-free real estate process from start to finish.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-1"></i></div>
                        <h4>Tailored Solutions</h4>
                        <p>Personalized approaches to match your unique real estate needs and preferences.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-26"></i></div>
                        <h4>Budget-Friendly</h4>
                        <p>Discover affordable real estate options without compromising quality or comfort.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-21"></i></div>
                        <h4>Unmatched Support</h4>
                        <p>Count on our unwavering assistance and expertise for unparalleled results.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-1"></i></div>
                        <h4>Start Here</h4>
                        <p>Begin your real estate journey with us and embark on the path to your dream property.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-26"></i></div>
                        <h4>Dream Reality</h4>
                        <p>Turn your real estate dreams into reality with our dedicated guidance and support.</p>
                    </div>
                </div>
                <div class="feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-21"></i></div>
                        <h4>Trust Us</h4>
                        <p>Rely on our proven track record and commitment to excellence for your real estate
                            endeavors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-three end -->

    <!-- chooseus-section -->
    <section class="chooseus-section alternate-2 bg-color-1">
        <div class="auto-container">
            <div class="upper-box clearfix">
                <div class="sec-title">
                    <h5>Why Choose Us?</h5>
                    <h2>Reasons To Choose Us</h2>
                </div>
            </div>
            <div class="lower-box">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-19"></i></div>
                                <h4>Profitable Investments</h4>
                                <p>Make smart moves to grow your business with our properties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-26"></i></div>
                                <h4>Wide Choices</h4>
                                <p>Discover the perfect place that suits you best.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <h4>Reliable Support</h4>
                                <p>Count on our team for guidance and assistance every step of the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
