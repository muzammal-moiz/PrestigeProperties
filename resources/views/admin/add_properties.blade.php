@extends('admin.includes.master')

@section('title')
    Add {{ $type }} Properties
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
                        <h1>Add {{ $type }} Properties</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>Add {{ $type }} Properties</li>
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
                                <h3 class="title"><b>Add {{ $type }} Properties</b></h3>
                                <form method="post" class="contact-form mt-4"
                                      action="{{ route('admin.save_property') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="type" value="{{ $type }}">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Property Heading</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Property Heading" required name="heading" value="{{ old('heading') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Property Price</label>
                                            <input type="number" min="1" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Property Price" required name="price" value="{{ old('price') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Owner Name</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Owner Name" required name="added_by_name" value="{{ old('added_by_name') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Owner Image</label>
                                            <input type="file" class="form-control mb-3 MyInput" accept="image/*" autocomplete="off"
                                                   name="added_by_image">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Property Image</label>
                                            <input type="file" accept="image/*" class="form-control mb-3 MyInput"
                                                   autocomplete="off" required
                                                   placeholder="image" name="image">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Property Multiple Images</label>
                                            <input type="file" accept="image/*" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="MoreImages" name="MoreImages[]" multiple>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Description</label>
                                            <textarea name="description" placeholder="Description" id="description"
                                                      class="form-control"
                                                      rows="7">{{ old('description') }}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Rooms</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Rooms" required name="rooms" value="{{ old('rooms') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Garage Size (Sq Ft)</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Garage Size" required name="garage_size" value="{{ old('garage_size') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bedrooms</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Bedrooms" required name="bedrooms" value="{{ old('bedrooms') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Year Built</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Year Built" required name="year_built" value="{{ old('year_built') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bathrooms</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Bathrooms" required name="bathrooms" value="{{ old('bathrooms') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Property Size (Sq Ft)</label>
                                            <input type="number" min="0" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="Property Size" required name="property_size" value="{{ old('property_size') }}">
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="title"><b>Property Location</b></h3>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Country</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off" placeholder="Country" required name="country">
                                        </div>
                                        <div class="col-md-4">
                                            <label>State</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off" placeholder="State" required name="state">
                                        </div>
                                        <div class="col-md-4">
                                            <label>City</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off" placeholder="City" required name="city">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <input type="text" class="form-control mb-3 MyInput" id="location" autocomplete="off" placeholder="Address" name="address">
                                        </div>
                                    </div>

                                    <br>

                                    <h3 class="title"><b>Amenities
                                            <button type="button" class="btn btn-outline-info" onclick="AddAmenities()">
                                                Add Amenities +
                                            </button>
                                        </b></h3>

                                    <br>

                                    <div class="row" id="append_amenities"></div>

                                    <br>

                                    <h3 class="title"><b>Floor Plans
                                            <button type="button" class="btn btn-outline-info"
                                                    onclick="AddFloorPlans()">
                                                Add Floor Plans +
                                            </button>
                                        </b></h3>

                                    <br>

                                    <div class="row" id="append_floor_plans"></div>

                                    <div class="text-center my-5">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary"> Add
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

            <script src="https://cdn.tiny.cloud/1/slqzq9p4jfyu3f1nzvbomd2qq198chen520bsjv05lggwszl/tinymce/6/tinymce.min.js"
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

            <script>
                var count = 1;

                function AddAmenities() {
                    var a = `<div class="col-md-10 class_` + count + `">
                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                   placeholder="Amenity Heading" required name="amenities_heading[]">
                            </div>
                            <div class="col-md-2 class_` + count + `"><button style="width:100%;height:50px" class="btn btn-danger" type="button" onclick="RemoveAmenity(` + count + `)">Remove</button></div>
                            `;
                    $("#append_amenities").append(a);
                    count++;
                }

                function RemoveAmenity(id) {
                    $(".class_" + id).remove();
                }
            </script>

            <script>
                var floor_count = 1;

                function AddFloorPlans() {
                    var a = `<div class="col-md-5 floor_class_` + floor_count + `">
                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                   placeholder="Floor Heading" required name="floor_heading[]">
                            </div>
                            <div class="col-md-5 floor_class_` + floor_count + `">
                            <input type="file" class="form-control mb-3 MyInput" autocomplete="off" required name="floor_image[]">
                            </div>
                            <div class="col-md-2 floor_class_` + floor_count + `"><button style="width:100%;height:50px" class="btn btn-danger" type="button" onclick="RemoveFloor(` + floor_count + `)">Remove</button></div>
                            `;
                    $("#append_floor_plans").append(a);
                    floor_count++;
                }

                function RemoveFloor(id) {
                    $(".floor_class_" + id).remove();
                }
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

