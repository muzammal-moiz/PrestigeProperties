@extends('website.includes.master')

@section('title')
    Signup
@endsection

@section('content')

    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/blogbg.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Signup</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Signup</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="ragister-section centred sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                    <div class="sec-title">
                        <h5>Sign up</h5>
                        <h2>Sign In With PrestigeProperties</h2>
                    </div>
                    <div class="tabs-box">

                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <h4>Sign up</h4>
                                    <form action="{{ route('save_register_user') }}" method="post" class="default-form"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @if($errors->any())
                                            <div class="alert alert-danger" role="alert">
                                                <i data-feather="alert-circle"></i>
                                                @foreach($errors->all() as $error)
                                                    {{$error}}
                                                @endforeach
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name="email" required="" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" name="phone" required="" placeholder="phone">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="password" required="" placeholder="***">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" required=""
                                                   placeholder="***">
                                        </div>
                                        <div class="form-group">
                                            <label>Profile Pictrue</label>
                                            <div class="upload-inner centred"
                                                 style="border: 1px solid #e5e7ec;padding:3%;">
                                                <i class="fal fa-cloud-upload"></i>
                                                <div class="upload-box">
                                                    <input type="file" id="check3" name="profile" accept="image/*"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Sign up</button>
                                        </div>

                                    </form>
                                    <div class="othre-text">
                                        <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
