@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Faq')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            {{-- <div class="card-header">
                <a href="#" class="btn btn-sm btn-primary">Create new faq</a>
            </div> --}}
            <div class="card-body p-0">
                <table class="table table-sm table-hover table-striped">
                    <thead>
                        <tr>
                            <th>FAQ</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $item)
                        <tr>
                            <td style="width:700px">
                                <small> <strong>Q:</strong> {{ $item->question }}</small>
                                <hr>
                                <small> <strong>A:</strong> {{ $item->answer }}</small>
                            </td>
                            <td class="text-right">
                                <a href="admin/blog/delete/{{ $item->id }}" class="badge badge-dark rounded-0"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
