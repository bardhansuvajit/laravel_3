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
                                <a href="tel:{{ $item->phone }}"><i class="fa fa-phone fa-rotate-90 mr-2" aria-hidden="true"></i>{{ ucwords($item->phone) }}</a>
                                <br>
                                <a href="mailto:{{ $item->email }}"><i class="fa fa-envelope mr-2" aria-hidden="true"></i>{{ strtolower($item->email) }}</a>
                            </td>
                            <td style="width:500px">
                                <small title="{{ $item->message }}">{{ mb_strimwidth($item->message, 0, 97, '...') }}</small>
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
