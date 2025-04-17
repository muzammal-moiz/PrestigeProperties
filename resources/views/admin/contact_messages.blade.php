@extends('admin.includes.master')

@section('title')
    Contact Messages
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
                        <h1>Contact Messages</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li>Contact Messages</li>
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
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                        <th>Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($contactus as $q=>$contactuss)
                                                        <tr>
                                                            <td>{{ $q+1 }}</td>
                                                            <td>{{ $contactuss->name }}</td>
                                                            <td>{{ $contactuss->email }}</td>
                                                            <td>{{ $contactuss->subject }}</td>
                                                            <td>{{ $contactuss->message }}</td>
                                                            <td>{{ Carbon\Carbon::parse($contactuss->created_at)->format('d-m-Y') }}</td>
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
