@extends('website.includes.master')

@section('title')
    Inquiries
@endsection

@section('content')

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css"/>

    <style>
        .page-title-box {
            padding-top: 130px;
            padding-bottom: 70px;
        }
    </style>
    <section class="page-title centred"
             style="background-image: url({{ URL::asset('website/assets/images/background/about22.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Inquiries</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li>Inquiries</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-12">
                    <div class="section-title mt-4 mt-lg-0">
                        <div class="p-10 bg-surface-secondary">
                            <div class="container">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-nowrap text-center" id="MyTable">
                                            <thead class="table-light">
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Property</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($inquiries as $q=>$inquiry)
                                                <tr>
                                                    <td>{{ $q+1 }}</td>
                                                    <td>{{ $inquiry->name }}</td>
                                                    <td>
                                                        <a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="tel:{{ $inquiry->phone }}">{{ $inquiry->phone }}</a>
                                                    </td>
                                                    <td>{{ $inquiry->message }}</td>
                                                    <td>{{ Carbon\Carbon::parse($inquiry->created_at)->format('d-m-Y') }}</td>
                                                    <td>
                                                        @if($inquiry->property->type=="Sale")
                                                            <a href="{{ route('sale_property_detail',[$inquiry->property->slug]) }}"
                                                               target="_blank" class="btn btn-info">View
                                                                Property</a>
                                                        @endif
                                                        @if($inquiry->property->type=="Rent")
                                                            <a href="{{ route('rent_property_detail',[$inquiry->property->slug]) }}"
                                                               target="_blank" class="btn btn-info">View
                                                                Property</a>
                                                        @endif
                                                        @if($inquiry->property->type=="Commercial")
                                                            <a href="{{ route('commercial_property_detail',[$inquiry->property->slug]) }}"
                                                               target="_blank" class="btn btn-info">View
                                                                Property</a>
                                                        @endif
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

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script>
        $("#MyTable").DataTable();
    </script>
@endsection
