@extends('admin.includes.master')

@section('title')
    Properties {{ $type }} List
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
                        <h1>{{ $type }} Properties List</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>{{ $type }} Properties List</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="section p-0">
                <div class="container">
                    <div class="row align-items-center mt-5">

                        <div class="col-lg-12">
                            <div class="section-title mt-4 mt-lg-0">
                                <h3 class="title"><b>{{ $type }} Properties List</b></h3>

                                <div class="row">
                                    @forelse($properties as $property)
                                        <div class="col-lg-4 col-md-6 mt-4">
                                            <div class="card job-grid-box bookmark-post">
                                                <div class="card-body p-4">
                                                    <div>
                                                        <a>
                                                            @if(empty($property->image))

                                                                <img
                                                                    src="data:image/png;base64,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"
                                                                    alt="" style="width: 100%;height: 200px"
                                                                    class="img-fluid rounded-3"></a>

                                                        @else
                                                            <img
                                                                src="{{ URL::asset('admin/assets/uploads/'.$property->image) }}"
                                                                alt="" style="width: 100%;height: 200px"
                                                                class="img-fluid rounded-3"></a>
                                                        @endif
                                                    </div>
                                                    <div class="mt-4">
                                                        <a class="primary-link"><h6
                                                                class="fs-17 mb-1">{{ $property->heading }}</h6></a>
                                                        <div class="row">
                                                            <div class="col-md-8"><h6 class="fs-17 mb-1">
                                                                    <b>£{{ $property->price }}</b></h6></div>
                                                            <div class="col-md-4"><h6 class="fs-17 mb-1"><span
                                                                        class="badge badge-info">{{ $property->type }}</span>
                                                                </h6></div>
                                                        </div>
                                                    </div>
                                                    <div class="job-grid-content mt-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center mt-4 border-top pt-3">
                                                            <a href="{{ route('admin.edit_images',[encrypt($property->id)]) }}"
                                                               class="btn btn-sm btn-info" style="margin-left: 1px">Images</a>
                                                            <a href="{{ route('admin.edit_amenities',[encrypt($property->id)]) }}"
                                                               class="btn btn-sm btn-dark" style="margin-left: 1px">Amenities</a>
                                                            <a href="{{ route('admin.edit_plans',[encrypt($property->id)]) }}"
                                                               class="btn btn-sm btn-warning" style="margin-left: 1px">Plans</a>
                                                            <a href="{{ route('admin.edit_property',[encrypt($property->id)]) }}"
                                                               class="btn btn-sm btn-success" style="margin-left: 1px">Edit</a>
                                                            <a href="{{ route('admin.delete_property',[encrypt($property->id)]) }}"
                                                               onclick="return(confirm('Are you sure to delete this Property permanently ?'))"
                                                               class="btn btn-sm btn-danger" style="margin-left: 1px">Delete</a>
                                                        </div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end job-grid-box-->
                                        </div>
                                    @empty
                                        <center><h1 style="color: red">No Properties Added.</h1></center>
                                    @endforelse
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

@endsection

