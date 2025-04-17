@extends('website.includes.master')

@section('title')
    User Profile
@endsection

@section('content')

    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/blogbg.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>User Profile</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>User Profile</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="ragister-section centred sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">

                    <div class="tabs-box">
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <form action="{{ route('updateuserprofile') }}" method="post" class="default-form"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" required=""
                                                   value="{{ Auth::guard('web')->user()->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name="email"
                                                   value="{{ Auth::guard('web')->user()->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" name="phone" required=""
                                                   value="{{ Auth::guard('web')->user()->phone }}">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="password" placeholder="***">
                                        </div>
                                        <div class="form-group">
                                            <label>Profile Picture</label>
                                            <input type="file" name="profile" accept="image/*" class="form-control">
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Confirm</button>
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

@endsection
