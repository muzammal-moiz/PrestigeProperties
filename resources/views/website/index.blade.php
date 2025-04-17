@extends('website.includes.master')

@section('title')
Home
@endsection

@section('content')

<section class="banner-style-two centred">
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
        <div class="slide-item">
            <div class="image-layer"
                style="background-image: url({{ URL::asset('website/assets/images/banner/bg3.jpg') }})"></div>

            <div class="auto-container">
                <div class="content-box">
                    <h2>Find Your Ideal Home Now</h2>
                    <p>Discover a Variety of Rental and Sale Properties in Great Locations</p>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer"
                style="background-image:url({{ URL::asset('website/assets/images/banner/bg2.jpg') }})"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Discover Lucrative Business Opportunities</h2>
                    <p>Tailored Investments to Meet Your Business Goals</p>
                </div>
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer"
                style="background-image:url({{ URL::asset('website/assets/images/banner/bg1.jpg') }})"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Transform Your Real Estate Journey</h2>
                    <p>Rely on Our Dedicated Team for Guidance Every Step of the Way</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="search-field-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tab-btn-box">
                    </div>
                    <div class="tabs-content info-group">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="{{ route('sale_properties') }}" method="get" class="search-form"
                                        id="property-search-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Heading</label>
                                                    <input type="text" class="form-control MyInput"
                                                        placeholder="Property Heading" name="heading">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <input type="text" class="form-control MyInput"
                                                        placeholder="Property Location" name="address">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <select class="form-control" style="height:50px"
                                                        id="property-type-select">
                                                        <option value="sale">Sale</option>
                                                        <option value="rent">Rent</option>
                                                        <option value="commercial">Commercial</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-style-two sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Features</h5>
            <h2>Featured Property</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            @forelse($featured_properties as $featured_property)
            <div class="feature-block-one">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <img src="{{ URL::asset('admin/assets/uploads/'.$featured_property->image) }}"
                                style="width: 100%;height:250px" alt="">
                        </figure>
                    </div>
                    <div class="lower-content">
                        <div class="author-info clearfix">
                            <div class="author pull-left">
                                <h6>{{ $featured_property->added_by_name }}</h6>
                            </div>
                            <div class="buy-btn pull-right">
                                <?php
                                        if ($featured_property->type == "Sale") {
                                            ?>
                                <a href="{{ route('sale_property_detail',[$featured_property->slug]) }}">
                                    <?php
                                            }
                                            if ($featured_property->type == "Rent") {
                                                ?>
                                    <a href="{{ route('rent_property_detail',[$featured_property->slug]) }}">
                                        <?php
                                                }
                                                if ($featured_property->type == "Commercial") {
                                                    ?>
                                        <a href="{{ route('commercial_property_detail',[$featured_property->slug]) }}">
                                            <?php
                                                    }
                                                        ?>
                                            {{ ($featured_property->type!="Commercial") ? "For ".$featured_property->type : $featured_property->type }}
                                        </a>
                            </div>
                        </div>
                        <div class="title-text">
                            <h4>
                                <?php
                                        if ($featured_property->type == "Sale") {
                                            ?>
                                <a href="{{ route('sale_property_detail',[$featured_property->slug]) }}">
                                    <?php
                                            }
                                            if ($featured_property->type == "Rent") {
                                                ?>
                                    <a href="{{ route('rent_property_detail',[$featured_property->slug]) }}">
                                        <?php
                                                }
                                                if ($featured_property->type == "Commercial") {
                                                    ?>
                                        <a href="{{ route('commercial_property_detail',[$featured_property->slug]) }}">
                                            <?php
                                                    }
                                                        ?>
                                            {{ Str::limit($featured_property->heading, 50) }}</a>
                            </h4>
                        </div>
                        <div class="price-box clearfix">
                            <div class="price-info pull-left">
                                <h6>Demand</h6>
                                <h4>£{{ number_format($featured_property->price) }}</h4>
                            </div>
                            <ul class="other-option pull-right clearfix">
                                <li>
                                    <a @if(in_array($featured_property->id,$favourite)) style="background-color: green"
                                        @endif href="{{ route('add_to_favourite',[$featured_property->id]) }}"><i
                                            class="icon-13"></i></a>
                                </li>
                            </ul>
                        </div>
                        <p>{{ Str::limit($featured_property->location->address, 30) }}</p>
                        <ul class="more-details clearfix">
                            <li><i class="icon-14"></i>{{ $featured_property->bedrooms }} Beds</li>
                            <li><i class="icon-15"></i>{{ $featured_property->bathrooms }} Baths</li>
                            <li><i class="icon-16"></i>{{ $featured_property->property_size }} Sq Ft</li>
                        </ul>
                        <div class="btn-box">
                            <?php
                                    if ($featured_property->type == "Sale") {
                                        ?>
                            <a class="theme-btn btn-two"
                                href="{{ route('sale_property_detail',[$featured_property->slug]) }}">
                                <?php
                                        }
                                        if ($featured_property->type == "Rent") {
                                            ?>
                                <a class="theme-btn btn-two"
                                    href="{{ route('rent_property_detail',[$featured_property->slug]) }}">
                                    <?php
                                            }
                                            if ($featured_property->type == "Commercial") {
                                                ?>
                                    <a class="theme-btn btn-two"
                                        href="{{ route('commercial_property_detail',[$featured_property->slug]) }}">
                                        <?php
                                                }
                                                    ?>
                                        See Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>

<section class="cta-section alternate-2 centred"
    style="background-image: url({{ URL::asset('website/assets/images/background/cta-2.jpg') }});">
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text">
                <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
            </div>
            <div class="btn-box">
                <a href="{{ route('rent_properties') }}" class="theme-btn btn-three">Rent Properties</a>
                <a href="{{ route('sale_properties') }}" class="theme-btn btn-one" style="margin-right: 15px;">Sale
                    Properties</a>
                <a href="{{ route('commercial_properties') }}" class="theme-btn btn-three">Commercial</a>
            </div>
        </div>
    </div>
</section>

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

<section class="testimonial-style-four centred">
    <div class="auto-container">
        <div class="inner-container">
            <div class="sec-title">
                <h5>Testimonials</h5>
                <h2>What They Say About Us</h2>
                <p>Trusted Support Every Step of the Way</p>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-18"></i></div>
                        <h4>Incredible support, knowledge, and dedication from the team made finding my dream home a
                            breeze.</h4>
                        <h5>Ali</h5>

                    </div>
                </div>
                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-18"></i></div>
                        <h4>I confidently entered the real estate market as a first-time investor and am now
                            building a successful portfolio.</h4>
                        <h5>Ahmed</h5>

                    </div>
                </div>
                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-18"></i></div>
                        <h4>The professionalism,attention to detail,& approach exceeded my expectations in selling
                            my property.</h4>
                        <h5>Usman</h5>

                    </div>
                </div>
                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-18"></i></div>
                        <h4>From start to finish, they provided service, ensuring a smooth and successful real
                            estate transaction.</h4>
                        <h5>Taimoor</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-style-two"
    style="background-image: url({{ URL::asset('website/assets/images/background/testimonial-2.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 inner-column">
                <div class="single-item-carousel owl-carousel   owl-nav-none">
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <div class="text">
                                <h3>“Empowering individuals and businesses to find their perfect property match with
                                    personalized guidance and seamless transactions, enriching lives and driving
                                    growth within our communities.”</h3>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>News & Article</h5>
            <h2>Stay Update With PrestigeProperties</h2>
            <p>Explore our blog for insightful articles, expert tips, and the latest trends in real estate.<br />
                Whether you're a first-time homebuyer, seasoned investor, or simply curious about the industry</p>
        </div>
        <div class="row clearfix">
            @forelse($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ route('blog_detail',[$blog->id]) }}">
                                    <img src="{{ URL::asset('admin/assets/uploads/'.$blog->image) }}"
                                        style="width: 100%;height: 250px" alt=""></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h4>
                                <a href="{{ route('blog_detail',[$blog->id]) }}">{{ $blog->heading }}</a>
                            </h4>
                            <div class="text">
                                {!! Str::limit($blog->description, 100) !!}
                            </div>
                            <div class="btn-box"><a href="{{ route('blog_detail',[$blog->id]) }}"
                                    class="theme-btn btn-two">See
                                    Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>

@endsection
@section('script')
<script>
document.getElementById('property-type-select').addEventListener('change', function() {
    var selectedType = this.value;
    var form = document.getElementById('property-search-form');
    if (selectedType === 'sale') {
        form.action = "{{ route('sale_properties') }}";
    } else if (selectedType === 'rent') {
        form.action = "{{ route('rent_properties') }}";
    } else if (selectedType === 'commercial') {
        form.action = "{{ route('commercial_properties') }}";
    }
});
</script>
@endsection