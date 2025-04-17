@extends('website.includes.master')

@section('title')
    Commercial Properties Detail
@endsection

@section('content')

    <style>
        .active a {
            background-color: green !important;
            color: white !important;
        }
    </style>

    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/blogbg.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Commercial Properties Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Commercial Properties Detail</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="property-details property-details-three">
        <div class="auto-container">
            <div class="carousel-inner">
                <div class="bxslider">

                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box">
                                <img id="mainImage" src="{{ URL::asset('admin/assets/uploads/'.$property->image) }}"
                                     alt="">
                            </figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                @forelse($property->images as $i=>$img)
                                    <li>
                                        <a class="@if($i==0) active @endif" data-slide-index="{{ $i+1 }}" href="#"
                                           onclick="changeImage('{{ URL::asset('admin/assets/uploads/'.$img->image) }}')">
                                            <figure><img src="{{ URL::asset('admin/assets/uploads/'.$img->image) }}"
                                                         alt=""></figure>
                                        </a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-details clearfix">
                <div class="left-column pull-left clearfix">
                    <h3>{{ $property->heading }}</h3>
                    <div class="author-info clearfix">
                        <div class="author-box pull-left">
                            <figure class="author-thumb">
                                <img src="{{ URL::asset('admin/assets/uploads/'.$property->added_by_image) }}"
                                     style="width: 100%;height:40px"
                                     alt="">
                            </figure>
                            <h6>{{ $property->added_by_name }}</h6>
                        </div>

                    </div>
                </div>
                <div class="right-column pull-right clearfix">
                    <div class="price-inner clearfix">
                        <ul class="category clearfix pull-left">
                            <li><a>{{ ($property->type!="Commercial") ? "For ".$property->type : $property->type }}</a>
                            </li>
                        </ul>
                        <div class="price-box pull-right">
                            <h3>£{{ number_format($property->price) }}</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="property-details-content">
                        <div class="discription-box content-widget">
                            <div class="title-box">
                                <h4>Property Description</h4>
                            </div>
                            <div class="text">
                                {!! $property->description !!}
                            </div>
                        </div>
                        <div class="details-box content-widget">
                            <div class="title-box">
                                <h4>Property Details</h4>
                            </div>
                            <ul class="list clearfix">
                                <li>Rooms: <span>{{ $property->rooms }} Rooms</span></li>
                                <li>Garage Size: <span>{{ $property->garage_size }} Sq Ft</span></li>
                                <li>Property Price: <span>£{{ number_format($property->price) }}</span></li>
                                <li>Bedrooms: <span>{{ $property->bedrooms }} Bedrooms</span></li>
                                <li>Year Built: <span>{{ $property->year_built }}</span></li>
                                <li>Property Type: <span>{{ $property->type }}</span></li>
                                <li>Bathrooms: <span>{{ $property->bathrooms }} Bathrooms</span></li>
                                <li>Property Size: <span>{{ $property->property_size }} Sq Ft</span></li>
                            </ul>
                        </div>
                        @if(sizeof($property->amenities)>0)
                            <div class="amenities-box content-widget">
                                <div class="title-box">
                                    <h4>Amenities</h4>
                                </div>
                                <ul class="list clearfix">
                                    @forelse($property->amenities as $menity)
                                        <li>{{ $menity->heading }}</li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        @endif
                        @if(sizeof($property->plans)>0)
                            <div class="floorplan-inner content-widget">
                                <div class="title-box">
                                    <h4>Floor Plan</h4>
                                </div>
                                <ul class="accordion-box">
                                    @forelse($property->plans as $p=>$plans)
                                        <li class="accordion block @if($p==0) active-block @endif">
                                            <div class="acc-btn @if($p==0) active @endif">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>{{ $plans->heading }}</h5>
                                            </div>
                                            <div class="acc-content @if($p==0) current @endif">
                                                <div class="content-box">
                                                    <figure class="image-box">
                                                        <img
                                                            src="{{ URL::asset('admin/assets/uploads/'.$plans->image) }}"
                                                            style="" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        @endif
                        <div class="location-box content-widget">
                            <div class="title-box">
                                <h4>Location</h4>
                            </div>
                            <ul class="info clearfix">
                                <li>
                                    <span>Address : </span>{{ ($property->location->address) ? $property->location->address : '' }}
                                </li>
                                <li>
                                    <span>Country : </span> {{ ($property->location->country) ? $property->location->country : '' }}
                                </li>
                                <li>
                                    <span>State : </span> {{ ($property->location->state) ? $property->location->state : '' }}
                                </li>
                                <li>
                                    <span>State : </span> {{ ($property->location->city) ? $property->location->city : '' }}
                                </li>
                            </ul>
                            <div class="google-map-area" id="map" style="width: 100%;height: 400px"></div>
                        </div>
                        <div class="schedule-box content-widget">
                            <div class="title-box">
                                <h4>Schedule A Tour</h4>
                            </div>
                            <div class="form-inner">
                                <form action="" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <i class="far fa-calendar-alt"></i>
                                                <input type="text" name="date" placeholder="Date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <i class="far fa-clock"></i>
                                                <input type="text" name="time" placeholder="Time">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Your Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="tel" name="phone" placeholder="Your Phone" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
@section('script')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABXn0Dg5Bkbn8UnQFbMaaqbAQBMAsivEc&callback=initMap"></script>
    <script>
        function initMap() {
            // Initialize map
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 14
            });

            // Fetch address from your database (replace with your actual address)
            var address = "{{ $property->location->address }}";

            // Geocode the address to get its coordinates
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'address': address}, function (results, status) {
                if (status === 'OK') {
                    // Place marker on the map
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        title: address
                    });
                    map.setCenter(results[0].geometry.location);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>
    <script>
        function changeImage(imageUrl) {
            $('#mainImage').attr('src', imageUrl);
        }
    </script>
@endsection
