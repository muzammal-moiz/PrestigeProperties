@extends('website.includes.master')

@section('title')
    Rent Properties
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
                <h1>Rent Properties </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Rent Properties</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="property-page-section property-grid">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar property-sidebar">
                        <div class="filter-widget sidebar-widget">
                            <div class="widget-title">
                                <h5>FIlter Properties</h5></div>
                            <form action="{{ route('rent_properties') }}" method="get">
                                <div class="widget-content">
                                    <label for="">Property Heading</label>
                                    <input type="text" class="form-control" name="heading"
                                           placeholder="Property Heading . . . "
                                           value="{{ ($request->heading) ? $request->heading : '' }}">
                                    <br>
                                    <label for="">Property Location</label>
                                    <input type="text" class="form-control" name="address"
                                           placeholder="Property Location . . . "
                                           value="{{ ($request->address) ? $request->address : '' }}">
                                    <br>
                                    <label for="">Minimum Price</label>
                                    <input type="number" class="form-control" name="price"
                                           placeholder="Minimum Price . . . "
                                           value="{{ ($request->price) ? $request->price : '' }}">
                                    <br>
                                    <label for="">No Of Beds</label>
                                    <input type="number" min="0" name="bedrooms" class="form-control"
                                           placeholder="No Of Beds . . . "
                                           value="{{ ($request->bedrooms) ? $request->bedrooms : '' }}">
                                    <br>
                                    <label for="">No Of Baths</label>
                                    <input type="number" min="0" name="bathrooms" class="form-control"
                                           placeholder="No Of Baths . . . "
                                           value="{{ ($request->bathrooms) ? $request->bathrooms : '' }}">
                                    <br>
                                    <div class="filter-btn">
                                        <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filter
                                        </button>
                                        <br>
                                        <a href="{{ route('rent_properties') }}" type="submit"
                                           class="theme-btn btn-one">&nbsp;Reset
                                            Form</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="wrapper grid">
                            <div class="deals-grid-content grid-item">

                                @forelse($rent_properties as $r=>$property)
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                            <div class="deals-block-one">
                                                <div class="inner-box" style="padding:25px 30px 40px 40px !important;">
                                                    <div class="lower-content">
                                                        <div class="title-text">
                                                            <h4>
                                                                <a href="{{ route('rent_property_detail',[$property->slug]) }}">{{ Str::limit($property->heading, 50) }}</a>
                                                            </h4>
                                                        </div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Demand</h6>
                                                                <h4>£{{ number_format($property->price) }}</h4>
                                                            </div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li>
                                                                    <a @if(in_array($property->id,$favourite)) style="background-color: green"
                                                                       @endif href="{{ route('add_to_favourite',[$property->id]) }}"><i
                                                                            class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>{{ Str::limit($property->location->address, 30) }}</p>
                                                        <ul class="more-details clearfix">
                                                            <li>
                                                                <i class="icon-14"></i>{{ $property->bedrooms }}
                                                                Beds
                                                            </li>
                                                            <li>
                                                                <i class="icon-15"></i>{{ $property->bathrooms }}
                                                                Baths
                                                            </li>
                                                            <li>
                                                                <i class="icon-16"></i>{{ $property->property_size }}
                                                                Sq Ft
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box"><a
                                                                href="{{ route('rent_property_detail',[$property->slug]) }}"
                                                                class="theme-btn btn-two">See
                                                                Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <img
                                                        src="{{ URL::asset('admin/assets/uploads/'.$property->image) }}"
                                                        style="width: 100%;height:310px;border-radius: 10px"
                                                        alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                            <div class="row text-center justify-content-center Products_pginations">
                                @if ($rent_properties->lastPage() > 1)
                                    <ul class="pagination">
                                        <li class="{{ ($rent_properties->currentPage() == 1) ? ' disabled' : '' }}">
                                            @if($rent_properties->currentPage() == 1)
                                                <a disabled="" style="width: 100px;cursor:not-allowed;">Previous</a>
                                            @else
                                                <a style="width: 100px"
                                                   href="{{ $rent_properties->url(1) }}">Previous</a>
                                            @endif
                                        </li>
                                        @for ($i = 1; $i <= $rent_properties->lastPage(); $i++)
                                            <li class="{{ ($rent_properties->currentPage() == $i) ? ' active' : '' }}">
                                                <a href="{{ $rent_properties->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($rent_properties->currentPage() == $rent_properties->lastPage()) ? ' disabled' : '' }}">
                                            @if($rent_properties->currentPage() == $rent_properties->lastPage())
                                                <a style="width: 100px;cursor:not-allowed" disabled="">Next</a>
                                            @else
                                                <a style="width: 100px"
                                                   href="{{ $rent_properties->url($rent_properties->currentPage()+1) }}">Next</a>
                                            @endif
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
