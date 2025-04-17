@extends('admin.includes.master')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ URL::asset('website/assets/images/shape/shape-9.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ URL::asset('website/assets/images/shape/shape-10.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Dashboard</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </div>
    </section>

@endsection
