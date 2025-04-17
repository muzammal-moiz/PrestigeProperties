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
                                    <li>
                                        <a href="{{ route('admin.dashboard') }}"><span>Home</span></a>
                                    </li>
                                    <li class="dropdown"><a href="#"><span>Sale</span></a>
                                        <ul>
                                            <li><a href="{{ route('admin.add_properties',['Sale']) }}">Add Properties</a></li>
                                            <li><a href="{{ route('admin.properties_list',['Sale']) }}">Properties List</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#"><span>Rent</span></a>
                                        <ul>
                                            <li><a href="{{ route('admin.add_properties',['Rent']) }}">Add Properties</a></li>
                                            <li><a href="{{ route('admin.properties_list',['Rent']) }}">Properties List</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#"><span>Commercial</span></a>
                                        <ul>
                                            <li><a href="{{ route('admin.add_properties',['Commercial']) }}">Add Properties</a></li>
                                            <li><a href="{{ route('admin.properties_list',['Commercial']) }}">Properties List</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#"><span>Blogs</span></a>
                                        <ul>
                                            <li><a href="{{ route('admin.add_blogs') }}">Add Blogs</a></li>
                                            <li><a href="{{ route('admin.blogs_list') }}">Blogs List</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#"><span>Other</span></a>
                                        <ul>
                                            <li><a href="{{ route('admin.inquiries') }}">Inquiries</a></li>
                                            <li><a href="{{ route('admin.contact_messages') }}">Contact Messages</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#"><span>
                                                <u>
                                                    <figure class="author-thumb" style="display: inline !important; ">
                                                        @if(!empty(Auth::guard('admin')->user()->image))
                                                            <img
                                                                src="{{ URL::asset('admin/assets/uploads/'.Auth::guard('admin')->user()->image) }}"
                                                                alt="mdo" width="35"
                                                                height="35" class="rounded-circle me-1"
                                                                style="margin-right:15px;width:35px;">
                                                        @else
                                                            <img
                                                                src="https://cdn-icons-png.flaticon.com/256/149/149071.png"
                                                                alt="mdo" width="35"
                                                                height="35" class="rounded-circle me-1"
                                                                style="margin-right:15px;width:35px;">
                                                        @endif

                                                    </figure>
                                                    {{ Auth::guard('admin')->user()->name }}
                                                </u>
                                            </span>
                                        </a>
                                        <ul>
                                            <li><a href="{{ route('admin.AdminProfile') }}">Profile</a></li>
                                            <li><a href="{{ route('admin.setting') }}">Setting</a></li>
                                            <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content clearfix"></div>
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
                    <div class="menu-right-content clearfix"></div>
                </div>
            </div>
        </div>
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
    </header>
