@extends('website.includes.master')

@section('title')
    Blogs
@endsection

@section('content')

    <!--Page Title-->
    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/blogdetailsbg.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Blog Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ URL::asset('admin/assets/uploads/'.$blog->image) }}" alt=""
                                             style="width: 100%;height: 550px">
                                    </figure>

                                </div>
                                <div class="lower-content">
                                    <h3>{{ $blog->heading }}</h3>
                                    {!! $blog->description !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- sidebar-page-container -->

@endsection