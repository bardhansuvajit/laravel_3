@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Users')

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
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>
                                <img src="{{ checkPicture($item->picture) }}" alt="{{ strtolower(str_replace(" ", "_", $item->name))."Image" }}" class="img-thumbnail rounded-circle mr-3" style="height: 50px">
                                {{ ucwords($item->name) }}
                            </td>
                            <td>
                                <a href="mailto:{{ ucwords($item->email) }}">{{ ucwords($item->email) }}</a>
                            </td>
                            <td class="text-right">
                                <a href="admin/users/delete/{{ $item->id }}" class="badge badge-dark rounded-0"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
