@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <a href=" {{ route('admin.category') }} ">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-alt"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text font-weight-bold">Category</span>
                    {{-- <span class="info-box-number">
                        Category
                        <small>%</small>
                    </span> --}}
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ route('admin.blog') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Blog</span>
                    {{-- <span class="info-box-number">Create</span> --}}
                </div>
            </div>
        </a>
    </div>

    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ route('admin.testimonial') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-quote-left"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Testimonial</span>
                    {{-- <span class="info-box-number">760</span> --}}
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ route('admin.faq') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comment"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">FAQ</span>
                    {{-- <span class="info-box-number">2,000</span> --}}
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <a href=" {{ route('admin.contacts') }} ">
            <div class="info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-phone fa-rotate-90"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text font-weight-bold">Contact us</span>
                    {{-- <span class="info-box-number">
                        Category
                        <small>%</small>
                    </span> --}}
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ route('admin.users') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    {{-- <span class="info-box-number">Create</span> --}}
                </div>
            </div>
        </a>
    </div>

    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ route('admin.profile') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Profile</span>
                    {{-- <span class="info-box-number">760</span> --}}
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ route('admin.settings') }}">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Settings</span>
                    {{-- <span class="info-box-number">2,000</span> --}}
                </div>
            </div>
        </a>
    </div>
</div>

@endsection
