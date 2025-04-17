@extends('website.includes.master')

@section('title')
    Favourite Properties
@endsection

@section('content')

    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/about22.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Favourite Properties</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Favourite Properties</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="property-page-section property-grid">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="wrapper grid">
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    @forelse($properties as $p=>$property)
                                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image">
                                                            <img
                                                                    src="{{ URL::asset('admin/assets/uploads/'.$property->property_detaill->image) }}"
                                                                    style="width: 100%;height:250px" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-info clearfix">
                                                            <div class="author pull-left">
                                                                <h6>{{ $property->property_detaill->added_by_name }}</h6>
                                                            </div>
                                                            <div class="buy-btn pull-right">
                                                                    <?php
                                                                if ($property->property_detaill->type == "Sale") {
                                                                    ?>
                                                                <a href="{{ route('sale_property_detail',[$property->property_detaill->slug]) }}">
                                                                        <?php
                                                                    }
                                                                    if ($property->property_detaill->type == "Rent") {
                                                                        ?>
                                                                    <a href="{{ route('rent_property_detail',[$property->property_detaill->slug]) }}">
                                                                            <?php
                                                                        }
                                                                        if ($property->property_detaill->type == "Commercial") {
                                                                            ?>
                                                                        <a href="{{ route('commercial_property_detail',[$property->property_detaill->slug]) }}">
                                                                                <?php
                                                                            }
                                                                                ?>
                                                                            {{ ($property->property_detaill->type!="Commercial") ? "For ".$property->property_detaill->type : $property->property_detaill->type }}
                                                                        </a>
                                                            </div>
                                                        </div>
                                                        <div class="title-text"><h4>
                                                                    <?php
                                                                if ($property->property_detaill->type == "Sale") {
                                                                    ?>
                                                                <a href="{{ route('sale_property_detail',[$property->property_detaill->slug]) }}">
                                                                        <?php
                                                                    }
                                                                    if ($property->property_detaill->type == "Rent") {
                                                                        ?>
                                                                    <a href="{{ route('rent_property_detail',[$property->property_detaill->slug]) }}">
                                                                            <?php
                                                                        }
                                                                        if ($property->property_detaill->type == "Commercial") {
                                                                            ?>
                                                                        <a href="{{ route('commercial_property_detail',[$property->property_detaill->slug]) }}">
                                                                                <?php
                                                                            }
                                                                                ?>
                                                                            {{ Str::limit($property->property_detaill->heading, 50) }}
                                                                        </a>
                                                            </h4></div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Demand</h6>
                                                                <h4>
                                                                    £{{ number_format($property->property_detaill->price) }}</h4>
                                                            </div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li>
                                                                    <a style="background-color: green"
                                                                       href="{{ route('add_to_favourite',[$property->property_detaill->id]) }}"><i
                                                                                class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>{{ Str::limit($property->property_detaill->location->address, 30) }}</p>
                                                        <ul class="more-details clearfix">
                                                            <li>
                                                                <i class="icon-14"></i>{{ $property->property_detaill->bedrooms }}
                                                                Beds
                                                            </li>
                                                            <li>
                                                                <i class="icon-15"></i>{{ $property->property_detaill->bathrooms }}
                                                                Baths
                                                            </li>
                                                            <li>
                                                                <i class="icon-16"></i>{{ $property->property_detaill->property_size }}
                                                                Sq Ft
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box">
                                                                <?php
                                                            if ($property->property_detaill->type == "Sale") {
                                                                ?>
                                                            <a class="theme-btn btn-two" href="{{ route('sale_property_detail',[$property->property_detaill->slug]) }}">
                                                                    <?php
                                                                }
                                                                if ($property->property_detaill->type == "Rent") {
                                                                    ?>
                                                                <a class="theme-btn btn-two" href="{{ route('rent_property_detail',[$property->property_detaill->slug]) }}">
                                                                        <?php
                                                                    }
                                                                    if ($property->property_detaill->type == "Commercial") {
                                                                        ?>
                                                                    <a class="theme-btn btn-two" href="{{ route('commercial_property_detail',[$property->property_detaill->slug]) }}">
                                                                            <?php
                                                                        }
                                                                            ?>
                                                                See Details
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
