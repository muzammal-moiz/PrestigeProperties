@extends('website.includes.master')

@section('title')
    Faqs
@endsection

@section('content')

    <!--Page Title-->
    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/about22.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Frequently Asked Questions</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Frequently Asked Questions</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- faq-page-section -->
    <section class="faq-page-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="faq-content-side">
                        <div class="sec-title">
                            <h5>FAQ’S</h5>
                            <h2>Frequently Asked Questions.</h2>
                            <p> Your Guide to Prestige Properties</p>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>How can I get started with buying or renting a property through PrestigeProperties?</h5>
                                </div>
                                <div class="acc-content current">
                                    <div class="content-box">
                                        <p>Our process is simple! You can start by browsing our listings online or contacting one of our experienced agents who will guide you through the steps tailored to your needs.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>What types of properties does Prestige Properties offer?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="content-box">
                                        <p>We specialize in a wide range of properties including luxury homes, waterfront estates, urban condos, commercial buildings, and more. Whatever your dream property may be, we have options to suit your taste and lifestyle.</p>

                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>Why should I choose Prestige Properties for my real estate needs?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="content-box">
                                        <p>At Prestige Properties, we prioritize quality, integrity, and customer satisfaction. Our team of experienced professionals is dedicated to providing personalized service, expert guidance, and unmatched support throughout your real estate journey.</p>

                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>Can I schedule a viewing for a property listed on Prestige Properties?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="content-box">
                                        <p>Absolutely! Once you find a property that interests you, simply contact us to schedule a viewing at your convenience. Our agents will be happy to arrange a tour and provide any additional information you may need.</p>

                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h5>What if I have questions or need assistance while browsing Prestige Properties?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="content-box">
                                        <p>We're here to help! Feel free to reach out to our friendly team with any questions or concerns you may have. You can contact us via phone, email, or visit our office for personalized assistance. Your satisfaction is our priority.</p>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- faq-page-section end -->


@endsection