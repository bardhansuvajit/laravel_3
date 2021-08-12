@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Category')

@section('content')

<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <a href=" {{ route('admin.category.blog') }} ">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text text-dark">Blog</span>
                    {{-- <span class="info-box-number text-dark">13,648</span> --}}
                </div>
            </div>
        </a>
    </div>
</div>

@endsection
