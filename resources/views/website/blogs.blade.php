@extends('website.includes.master')

@section('title')
    Blogs
@endsection

@section('content')

    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/blogbg.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Blog </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sidebar-page-container blog-grid sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="blog-grid-content">
                        <div class="row clearfix">
                            @forelse($blogs as $blog)
                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                         data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="{{ route('blog_detail',[$blog->id]) }}">
                                                        <img src="{{ URL::asset('admin/assets/uploads/'.$blog->image) }}"
                                                             style="width: 100%;height: 250px"
                                                             alt=""></a>
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
                </div>
            </div>
        </div>
    </section>

@endsection