<?php
$system = App\Models\Setting::first();
?>
<section class="subscribe-section bg-color-3">
    <div class="pattern-layer"
         style="background-image: url({{ URL::asset('website/assets/images/shape/shape-2.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-6 col-sm-12 text-column">
                <div class="text">
                    <h2>Empowering Your Real Estate Journey: Discover, Invest, and Thrive with Our Trusted Team by Your
                        Side.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main-footer -->
<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3><b>{{ $system->name }}</b></h3>
                        </div>
                        <div class="text">
                            <p>Your premier destination for all your real estate needs. Whether you're looking to rent,
                                buy, sell, or invest in commercial properties, we have you covered.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                <li><a href="{{ route('faq') }}">FAQ's</a></li>
                                <li><a href="{{ route('blogs') }}">Our Blog</a></li>
                                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>{{ $system->location }}</li>
                                <li><i class="fas fa-microphone"></i><a
                                            href="tel:{{ $system->phone }}">{{ $system->phone }}</a>
                                </li>
                                <li><i class="fas fa-envelope"></i><a
                                            href="mailto:{{ $system->email }}">{{ $system->email }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">

                <div class="copyright pull-left">
                    <p><a href="{{ route('/') }}"><b>{{ $system->name }}</b></a> &copy; <?php echo date("Y"); ?> All Right
                        Reserved</p>
                </div>

            </div>
        </div>
    </div>
</footer>


<script src="{{ URL::asset('website/assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/owl.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/wow.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/validation.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/appear.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/scrollbar.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/isotope.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/jQuery.style.switcher.min.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/jquery-ui.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/product-filter.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/bxslider.js') }}"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{ URL::asset('website/assets/js/gmaps.js') }}"></script>
<script src="{{ URL::asset('website/assets/js/map-helper.js') }}"></script>

<!-- main-js -->
<script src="{{ URL::asset('website/assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

</html>
