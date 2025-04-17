@extends('website.includes.master')

@section('title')
    Commercial Properties
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
                <h1>Commercial Properties </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Commercial Properties</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="property-page-section property-grid">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar property-sidebar">
                        <div class="filter-widget sidebar-widget">
                            <div class="widget-title">
                                <h5>Filter Property</h5></div>
                            <form action="{{ route('commercial_properties') }}" method="get">
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
                                        <a href="{{ route('commercial_properties') }}" type="submit"
                                           class="theme-btn btn-one">&nbsp;Reset
                                            Form</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="wrapper list">
                            <div class="deals-list-content list-item">
                                @forelse($commercial_properties as $c=>$property)
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <img
                                                        src="{{ URL::asset('admin/assets/uploads/'.$property->image) }}"
                                                        style="width: 100%;height:300px"
                                                        alt="">
                                                </figure>

                                                <div class="buy-btn"><a
                                                        href="{{ route('commercial_property_detail',[$property->slug]) }}">Commercial</a>
                                                </div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a
                                                            href="{{ route('commercial_property_detail',[$property->slug]) }}">{{ Str::limit($property->heading, 50) }}</a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Demand</h6>
                                                        <h4>£{{ number_format($property->price) }}</h4>
                                                    </div>

                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb">
                                                            <span>{{ $property->added_by_name }}</span>
                                                        </figure>
                                                    </div>
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
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a
                                                            href="{{ route('commercial_property_detail',[$property->slug]) }}"
                                                            class="theme-btn btn-two">See
                                                            Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li>
                                                            <a @if(in_array($property->id,$favourite)) style="background-color: green"
                                                               @endif href="{{ route('add_to_favourite',[$property->id]) }}"><i
                                                                    class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                            <div class="row text-center justify-content-center Products_pginations">
                                @if ($commercial_properties->lastPage() > 1)
                                    <ul class="pagination">
                                        <li class="{{ ($commercial_properties->currentPage() == 1) ? ' disabled' : '' }}">
                                            @if($commercial_properties->currentPage() == 1)
                                                <a disabled="" style="width: 100px;cursor:not-allowed;">Previous</a>
                                            @else
                                                <a style="width: 100px"
                                                   href="{{ $commercial_properties->url(1) }}">Previous</a>
                                            @endif
                                        </li>
                                        @for ($i = 1; $i <= $commercial_properties->lastPage(); $i++)
                                            <li class="{{ ($commercial_properties->currentPage() == $i) ? ' active' : '' }}">
                                                <a href="{{ $commercial_properties->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($commercial_properties->currentPage() == $commercial_properties->lastPage()) ? ' disabled' : '' }}">
                                            @if($commercial_properties->currentPage() == $commercial_properties->lastPage())
                                                <a style="width: 100px;cursor:not-allowed" disabled="">Next</a>
                                            @else
                                                <a style="width: 100px"
                                                   href="{{ $commercial_properties->url($commercial_properties->currentPage()+1) }}">Next</a>
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
