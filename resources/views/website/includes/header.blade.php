<?php
$system = App\Models\Setting::first();
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{ $system->name }} @yield('title')</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ URL::asset('admin/assets/uploads/'.$system->favicon) }}"/>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{ URL::asset('website/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('website/assets/css/responsive.css') }}" rel="stylesheet">
</head>
<!-- page wrapper -->

<style>
    .MyInput {
        height: 50px;
    }
</style>

<body>
<div class="boxed_wrapper">
    <!-- preloader -->

    <!-- preloader end -->
    <!-- main header -->
    <header class="main-header">

        <!-- header-lower -->
        <div class="header-lower">
            <div class="outer-box">
                <div class="main-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <figure class="logo"><a href="{{ route('/') }}"><img
                                        src="{{ URL::asset('admin/assets/uploads/'.$system->logo) }}" alt=""></a>
                            </figure>
                        </figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><i class="icon-bar"></i> <i class="icon-bar"></i> <i
                                class="icon-bar"></i></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ (Route::currentRouteName()=='aboutus') ? 'current' : '' }}"><a
                                            href="{{ route('/') }}"><span>Home</span></a></li>
                                    <li class="{{ (Route::currentRouteName()=='aboutus') ? 'current' : '' }}"><a
                                            href="{{ route('aboutus') }}"><span>About Us</span></a></li>
                                    <li class="dropdown"><a href="#"><span>Property</span></a>
                                        <ul>
                                            <li><a href="{{ route('sale_properties') }}">Properties for Sale</a></li>
                                            <li><a href="{{ route('rent_properties') }}">Properties for Rent</a></li>
                                            <li><a href="{{ route('commercial_properties') }}">Commercial Properties</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ (Route::currentRouteName()=='blogs') ? 'current' : '' }}"><a
                                            href="{{ route('blogs') }}"><span>Blog</span></a></li>
                                    <li class="{{ (Route::currentRouteName()=='faq') ? 'current' : '' }}"><a
                                            href="{{ route('faq') }}"><span>FAQ's</span></a></li>
                                    <li class="{{ (Route::currentRouteName()=='contactus') ? 'current' : '' }}"><a
                                            href="{{ route('contactus') }}"><span>Contact</span></a></li>
                                    @if(!empty(Auth::user()))
                                        <li class="dropdown"><a href="#"><span>
                                                <u>
                                                    <figure class="author-thumb" style="display: inline !important; ">
                                                         @if(empty(Auth::guard('web')->user()->image))
                                                            <img
                                                                src="{{ URL::asset('website/assets/images/dummy.jpg') }}"
                                                                alt="mdo" width="35"
                                                                height="35"
                                                                class="rounded-circle me-1">
                                                        @else
                                                            <img
                                                                src="{{ URL::asset('admin/assets/uploads/'.Auth::guard("web")->user()->image) }}"
                                                                alt="mdo" width="35"
                                                                height="35"
                                                                class="rounded-circle me-1">
                                                        @endif
                                                    </figure>
                                                    {{ Auth::guard('web')->user()->name }}
                                                </u>
                                            </span>
                                            </a>
                                            <ul>
                                                <li><a href="{{ route('userprofile') }}">Profile</a></li>
                                                <li><a href="{{ route('inquiries') }}">Inquiries</a></li>
                                                <li><a href="{{ route('favourites') }}">Favourites</a></li>
                                                <li><a href="{{ route('customerlogout') }}">Logout</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                    @if(empty(Auth::user()))
                        <div class="menu-right-content clearfix">
                            <div class="btn-box">
                                <a href="{{ route('login') }}" class="theme-btn btn-one">Signin</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!--sticky Header-->
        <div class="sticky-header">
            <div class="outer-box">
                <div class="main-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="{{ route('/') }}"><img
                                    src="{{ URL::asset('admin/assets/uploads/'.$system->logo) }}"
                                    alt=""></a>
                        </figure>
                    </div>
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    @if(empty(Auth::user()))
                        <div class="menu-right-content clearfix">
                            <div class="btn-box">
                                <a href="" class="theme-btn btn-one">Signin</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <nav class="menu-box">
            <div class="nav-logo">
                <a href="{{ route('/') }}"><img src="{{ URL::asset('admin/assets/uploads/'.$system->white_logo) }}"
                                                alt=""
                                                title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>{{ $system->location }}</li>
                    <li><a href="tel:{{ $system->phone }}">{{ $system->phone }}</a></li>
                    <li><a href="mailto:{{ $system->email }}">{{ $system->email }}</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="{{ $system->facebook }}"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="{{ $system->instagram }}"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
