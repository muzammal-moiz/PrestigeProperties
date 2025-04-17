@extends('website.includes.master')

@section('title')
    Login
@endsection

@section('content')

    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/blogbg.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Login</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="ragister-section centred sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                    <div class="sec-title">
                        <h5>Sign in</h5>
                        <h2>Sign In With PrestigeProperties</h2>
                    </div>
                    <div class="tabs-box">

                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <h4>Sign in</h4>
                                    <form action="{{ route('customerlogin') }}" method="post" class="default-form">
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
                                            <label>Email address</label>
                                            <input type="email" name="email" required="" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" required="" placeholder="***">
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Sign In</button>
                                        </div>
                                    </form>
                                    <div class="othre-text">
                                        <p>Have not any account? <a href="{{ route('registration') }}">Register Now</a>
                                        </p>
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
