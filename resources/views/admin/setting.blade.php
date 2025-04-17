@extends('admin.includes.master')

@section('title')
    Setting
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
                        <h1>Website & Admin Setting</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>Website & Admin Setting</li>
                        </ul>
                    </div>
                </div>
            </section>


            <!-- START CONTACT-PAGE -->
            <section class="section p-0">
                <div class="container">
                    <div class="row align-items-center mt-5">

                        <div class="col-lg-12">
                            <div class="section-title mt-4 mt-lg-0">
                                <h3 class="title"><b>Website & Admin Setting</b></h3>
                                <form method="post" class="contact-form mt-4"
                                      action="{{ route('admin.updatesetting') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Website Name</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Application Name" name="name"
                                                   value="<?php echo $system->name; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Phone" name="phone"
                                                   value="<?php echo $system->phone; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Email" name="email"
                                                   value="<?php echo $system->email; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Location</label>
                                            <input type="text" class="form-control mb-3 MyInput" id="location"
                                                   autocomplete="off"
                                                   placeholder="Location" name="location"
                                                   value="<?php echo $system->location; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Facebook" name="facebook"
                                                   value="<?php echo $system->facebook; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Twitter" name="twitter"
                                                   value="<?php echo $system->twitter; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Instagram" name="instagram"
                                                   value="<?php echo $system->instagram; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Whatsapp</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Whatsapp" name="whatsapp"
                                                   value="<?php echo $system->whatsapp; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Youtube</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="youtube" name="youtube"
                                                   value="<?php echo $system->youtube; ?>">
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 mt-3">
                                            <label>Black Logo</label>
                                            <input type="file" class="form-control mb-3 MyFileInput" autocomplete="off"
                                                   name="logo" id="profile"
                                                   accept="image/*">
                                            <small><a href="{{ URL::asset('admin/assets/uploads/'.$system->logo) }}"
                                                      target="_blank">View Logo</a></small>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label>White Logo</label>
                                            <input type="file" class="form-control mb-3 MyFileInput" autocomplete="off"
                                                   name="white_logo" id="White"
                                                   accept="image/*">
                                            <small><a href="{{ URL::asset('admin/assets/uploads/'.$system->white_logo) }}"
                                                      target="_blank">View Logo</a></small>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label>Favicon</label>
                                            <input type="file" class="form-control mb-3 MyFileInput" autocomplete="off"
                                                   name="favicon" id="favicon"
                                                   accept="image/*">
                                            <small><a href="{{ URL::asset('admin/assets/uploads/'.$system->favicon) }}"
                                                      target="_blank">View Logo</a></small>
                                        </div>
                                    </div>

                                    <div class="text-center my-5">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary"> Update
                                            <i class="uil uil-message ms-1"></i></button>
                                    </div>
                                </form><!--end form-->
                            </div>
                        </div>

                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!-- START CONTACT-PAGE -->

        </div>
        <!-- End Page-content -->

        @endsection

        @section('script')

            <script
                    src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyABXn0Dg5Bkbn8UnQFbMaaqbAQBMAsivEc&libraries=places"></script>

            <script>
                google.maps.event.addDomListener(window, 'load', initialize);

                function initialize() {
                    var input = document.getElementById('location');
                    var autocomplete = new google.maps.places.Autocomplete(input);
                    autocomplete.addListener('place_changed', function () {
                        var place = autocomplete.getPlace();
                    });
                }
            </script>

@endsection
