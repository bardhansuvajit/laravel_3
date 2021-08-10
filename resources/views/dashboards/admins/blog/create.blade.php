@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Create new blog')

<link rel="stylesheet" href="{{ asset('plugins-custom/ckeditor-content-style.css') }}">

@section('content')

<style>
    .ck-editor__editable_inline {
    min-height: 200px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if (Session::get('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::get('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                <form action="{{ route('blog_create') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Category</label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                <option value="1">science</option>
                                <option value="2">hsitory</option>
                            </select>
                            <small class="text-danger">@error('cat_id') @enderror</small>
                        </div>
                        <div class="col-md-6">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="" value="{{ old('title') }}">
                            <small class="text-danger">@error('title') {{ $message }} @enderror</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control ck-content" id="description" placeholder="Enter the Description" name="description" value="{{ old('description') }}"></textarea>
                        <small class="text-danger">@error('description') {{ $message }} @enderror</small>
                    </div>
                    <div class="form-group text-right">
                        <a href="{{ route('admin.blog') }}" class="btn btn-secondary"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Back to blogs</a>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection

<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
