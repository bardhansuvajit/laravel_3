@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Contact us messages')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-sm table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Message</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>
                                {{ ucwords($item->name) }}
                            </td>
                            <td>
                                <a href="tel:{{ ucwords($item->phone) }}">{{ ucwords($item->phone) }}</a>
                            </td>
                            <td>
                                <small>{{ $item->message }}</small>
                            </td>
                            <td class="text-right">
                                {{-- <a href="admin/blog/delete/{{ $item->id }}" class="badge badge-dark rounded-0"><i class="fas fa-trash"></i></a> --}}
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
