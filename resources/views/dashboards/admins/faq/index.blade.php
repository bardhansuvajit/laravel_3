@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Faq')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('faqCreate') }}" class="btn btn-sm btn-primary">Create new FAQ</a>
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
                            <th>FAQ</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td style="width:700px">
                                <small title="Question : {{ $item->question }}"> <strong>Q : </strong> {{ mb_strimwidth($item->question, 0, 97, '...') }}</small>
                                <hr class="my-1">
                                <small title="Answer : {{ $item->answer }}"> <strong>A : </strong> {{ mb_strimwidth($item->answer, 0, 97, '...') }}</small>
                            </td>
                            <td style="width: 100px" class="text-right">
                                <a href="admin/faq/delete/{{ $item->id }}" class="badge badge-dark rounded-0"><i class="fas fa-trash"></i></a>
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
