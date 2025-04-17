@extends('admin.includes.master')

@section('title')
    Edit Images
@endsection
<?php

use Illuminate\Support\Str;

?>
@section('content')

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css"/>

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
                        <h1>Edit Images</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>Edit Images</li>
                        </ul>
                    </div>
                </div>
            </section>


            <section class="section">
                <div class="container">
                    <form action="{{ route('admin.add_new_property_image') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <label for="">Add Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                                <input type="hidden" name="id" value="{{ $propertyid }}">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info w-100" style="margin-top: 32px">Save Record</button>
                            </div>
                        </div>
                    </form>
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-12">
                            <div class="section-title mt-4 mt-lg-0">
                                <div class="p-10 bg-surface-secondary">
                                    <div class="container">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-nowrap" id="MyTable">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>Sr.No</th>
                                                        <th>Image</th>
                                                        <th>Created At</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($images as $q=>$image)
                                                        <tr>
                                                            <td>{{ $q+1 }}</td>
                                                            <td>
                                                                <a href="{{ url::asset('admin/assets/uploads/'.$image->image) }}"
                                                                   target="_blank"><img style="width: 50px;height: 50px"
                                                                                        src="{{ url::asset('admin/assets/uploads/'.$image->image) }}"
                                                                                        alt=""></a></td>
                                                            <td>{{ Carbon\Carbon::parse($image->created_at)->format('d-m-Y') }}</td>
                                                            <td>
                                                                <a onclick="return(confirm('Are you sure to delete this record permanently ?'))"
                                                                   href="{{ route('admin.delete_property_image',[encrypt($image->id)]) }}"
                                                                   class="btn btn-outline-danger btn-icon">
                                                                    Delete Image
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    @empty
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>

        </div>
    </div>
    <!-- End Page-content -->

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script>
        $("#MyTable").DataTable();
    </script>
@endsection
