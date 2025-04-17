@extends('admin.includes.master')

@section('title')
    Admin Profile
@endsection

@section('content')

    <style>
        .page-title-box {
            padding-top: 130px;
            padding-bottom: 70px;
        }
    </style>

    <div class="main-content">

        <div class="page-content">

            <section class="page-title-two bg-color-1 centred">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url({{ URL::asset('website/assets/images/shape/shape-9.png') }});"></div>
                    <div class="pattern-2" style="background-image: url({{ URL::asset('website/assets/images/shape/shape-10.png') }});"></div>
                </div>
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <h1>Admin Profile</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>Admin Profile</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- START CONTACT-PAGE -->
            <section class="section p-0">
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="section-title mt-4 mt-lg-0">
                                <h3 class="title">Update Admin Profile</h3>
                                <form method="post" class="contact-form mt-4"
                                      action="{{ route('admin.updateprofile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <span id="error-msg"></span>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="nameInput" class="form-label">Name</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                       placeholder="Enter your name" required
                                                       value="{{ ($admin->name) ? $admin->name : '' }}">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="emaiol" name="email"
                                                       placeholder="Enter your email" required
                                                       value="{{ ($admin->email) ? $admin->email : '' }}">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="emaiol"
                                                       autocomplete="off" name="password"
                                                       placeholder="*******">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="subjectInput" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="subjectInput" name="phone"
                                                       id="subject"
                                                       placeholder="Enter your Phone"
                                                       value="{{ ($admin->phone) ? $admin->phone : '' }}">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="subjectInput" class="form-label">Profile Picture</label>
                                                <input type="file" class="form-control" name="profile"
                                                       accept="images/*">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="meassageInput" class="form-label">Address</label>
                                                <textarea class="form-control" id="meassageInput"
                                                          placeholder="Enter your Address" name="address"
                                                          rows="3">{{ ($admin->address) ? $admin->address : '' }}</textarea>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <div class="text-center my-5">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary"> Update <i class="uil uil-message ms-1"></i></button>
                                    </div>
                                </form><!--end form-->
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!-- START CONTACT-PAGE -->

        </div>
        <!-- End Page-content -->

@endsection
