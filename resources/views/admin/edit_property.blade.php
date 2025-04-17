@extends('admin.includes.master')

@section('title')
    Edit Properties
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
                    <div class="pattern-1"
                         style="background-image: url({{ URL::asset('website/assets/images/shape/shape-9.png') }});"></div>
                    <div class="pattern-2"
                         style="background-image: url({{ URL::asset('website/assets/images/shape/shape-10.png') }});"></div>
                </div>
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <h1>Edit Properties</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>Edit Properties</li>
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
                                <h3 class="title"><b>Edit Properties</b></h3>
                                <form method="post" class="contact-form mt-4"
                                      action="{{ route('admin.update_property') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $property->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Property Heading</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Property Heading" required name="heading"
                                                   value="{{ $property->heading }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Property Price</label>
                                            <input type="number" min="1" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Property Price" required name="price"
                                                   value="{{ $property->price }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Owner Name</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Owner Name" required name="added_by_name"
                                                   value="{{ $property->added_by_name }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Owner Image</label>
                                            <input type="file" class="form-control mb-3 MyInput" accept="image/*"
                                                   autocomplete="off"
                                                   name="added_by_image">
                                            <small><a target="_blank"
                                                      href="{{ URL::asset('admin/assets/uploads/'.$property->added_by_image) }}">View
                                                    Image</a></small>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Property Image</label>
                                            <input type="file" accept="image/*" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="image" name="image">
                                            <small><a target="_blank"
                                                      href="{{ URL::asset('admin/assets/uploads/'.$property->image) }}">View
                                                    Image</a></small>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Feature / Non Feature</label>
                                            <select name="feature_non_feature" style="height: 50px" class="form-control"
                                                    required>
                                                <option value="feature"
                                                        @if($property->feature_non_feature=="feature") selected @endif>
                                                    feature
                                                </option>
                                                <option value="nonfeature"
                                                        @if($property->feature_non_feature=="nonfeature") selected @endif>
                                                    nonfeature
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Description</label>
                                            <textarea name="description" placeholder="Description" id="description"
                                                      class="form-control"
                                                      rows="7">{{ $property->description }}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Rooms</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Rooms" required name="rooms"
                                                   value="{{ $property->rooms }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Garage Size (Sq Ft)</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Garage Size" required name="garage_size"
                                                   value="{{ $property->garage_size }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bedrooms</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Bedrooms" required name="bedrooms"
                                                   value="{{ $property->bedrooms }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Year Built</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Year Built" required name="year_built"
                                                   value="{{ $property->year_built }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bathrooms</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Bathrooms" required name="bathrooms"
                                                   value="{{ $property->bathrooms }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Property Size (Sq Ft)</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Property Size" required name="property_size"
                                                   value="{{ $property->property_size }}">
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="title"><b>Property Location</b></h3>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Country</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Country" required name="country"
                                                   value="{{ $property->location->country }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>State</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="State" required name="state"
                                                   value="{{ $property->location->state }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>City</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="City" required name="city"
                                                   value="{{ $property->location->city }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <input type="text" class="form-control mb-3 MyInput" id="location"
                                                   autocomplete="off" placeholder="Address" name="address"
                                                   value="{{ $property->location->address }}">
                                        </div>
                                    </div>
                                    <div class="text-center my-5">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary"> Update
                                            Property
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
                src="https://cdn.tiny.cloud/1/slqzq9p4jfyu3f1nzvbomd2qq198chen520bsjv05lggwszl/tinymce/6/tinymce.min.js"
                referrerpolicy="origin"></script>

            <script>
                var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

                tinymce.init({
                    selector: 'textarea#description',
                    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                    imagetools_cors_hosts: ['picsum.photos'],
                    menubar: 'file edit view insert format tools table help',
                    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                    toolbar_sticky: true,
                    autosave_ask_before_unload: true,
                    autosave_interval: '30s',
                    autosave_prefix: '{path}{query}-{id}-',
                    autosave_restore_when_empty: false,
                    autosave_retention: '2m',
                    image_advtab: true
                });
            </script>

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

