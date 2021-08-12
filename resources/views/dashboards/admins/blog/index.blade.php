@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Blog')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('create') }}" class="btn btn-sm btn-primary">Write new blog</a>
            </div>
            <div class="card-body p-0">
                @if (Session::get('success'))
                    <div class="alert alert-success">{{(Session::get('success'))}}</div>
                @endif
                @if (Session::get('error'))
                    <div class="alert alert-danger">{{(Session::get('error'))}}</div>
                @endif
                <table class="table table-sm table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            {{-- <td><small>{{ $item->description }}</small></td> --}}
                            <td><small>{!! html_entity_decode($item->description) !!}</small></td>
                            <td class="text-right">
                                <a href="admin/blog/delete/{{ $item->id }}" class="badge badge-dark rounded-0"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
