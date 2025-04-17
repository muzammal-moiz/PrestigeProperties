<?php
$system = App\Models\Setting::first();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{ $system->name }} Admin Login</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ URL::asset('admin/assets/uploads/'.$system->favicon) }}"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
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

<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                <div class="sec-title">
                    <h2>Admin Login</h2>
                </div>
                <div class="tabs-box">

                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <form action="{{ route('admin.login') }}" method="post" class="default-form">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required="">
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@extends('admin.includes.errors')
</body>
</html>
