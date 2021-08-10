@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Profile')

@section('content')


<div class="row">

    <div class="col-md-3">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src=" {{ Auth::user()->picture; }} " alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"> {{ ucwords(Auth::user()->name) }} </h3>

                <p class="text-muted text-center">Administrator</p>

                {{-- <a href="#" class="btn btn-primary btn-block"><b>Change avatar</b></a> --}}
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal information</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="personal_info">
                        <form class="form-horizontal" method="POST" action=" {{ route('adminUpdateInfo') }} " id="AdminInfoForm">
                            @csrf
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ Auth::user()->name }}" name="name">

                                    <span class="text-danger error-text name_error"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
