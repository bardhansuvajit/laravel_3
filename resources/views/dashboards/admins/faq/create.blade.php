@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Create FAQ')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if (Session::get('success'))
                    <div class="alert alert-success">{{(Session::get('success'))}}</div>
                @endif
                @if (Session::get('error'))
                    <div class="alert alert-danger">{{(Session::get('error'))}}</div>
                @endif
                <form action="{{ route('faq_create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Question</label>
                        <input type="text" name="question" class="form-control" placeholder="" value="{{ old('question') }}">
                        <small class="text-danger">@error('question') {{ $message }} @enderror</small>
                    </div>
                    <div class="form-group">
                        <label>Answer</label>
                        <textarea type="text" name="answer" class="form-control" placeholder="" value="{{ old('answer') }}" rows="3"></textarea>
                        <small class="text-danger">@error('answer') {{ $message }} @enderror</small>
                    </div>
                    <div class="form-group text-right">
                        <a href="{{ route('admin.faq') }}" class="btn btn-secondary"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Back to FAQs</a>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
