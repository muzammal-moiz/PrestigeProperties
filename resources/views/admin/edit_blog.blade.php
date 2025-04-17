@extends('admin.includes.master')

@section('title')
    Update Blog
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
                        <h1>Blogs Blog</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>Blogs Blog</li>
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
                                <h3 class="title">Update Blog</h3>
                                <form method="post" class="contact-form mt-4"
                                      action="{{ route('admin.update_blog') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Blog Heading</label>
                                            <input type="text" class="form-control mb-3 MyInput" autocomplete="off"
                                                   placeholder="Blog Heading" required name="heading"
                                                   value="{{ ($blog->heading) ? $blog->heading : '' }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Blog Image</label>
                                            <input type="file" accept="image/*" class="form-control mb-3 MyInput"
                                                   autocomplete="off"
                                                   placeholder="image" name="image">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Description</label>
                                            <textarea name="description" placeholder="Description" id="description"
                                                      class="form-control"
                                                      rows="7">{{ ($blog->description) ? $blog->description : '' }}</textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="{{ $blog->id }}">
                                    <div class="text-center my-5">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary"> Update
                                            Blog
                                        </button>
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
            <!-- Place the first <script> tag in your HTML's <head> -->
            <script
                    src="https://cdn.tiny.cloud/1/slqzq9p4jfyu3f1nzvbomd2qq198chen520bsjv05lggwszl/tinymce/6/tinymce.min.js"
                    referrerpolicy="origin"></script>

            <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
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
@endsection

