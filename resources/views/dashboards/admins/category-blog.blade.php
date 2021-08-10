@extends('dashboards.admins.layouts.admin-dash-layout')

@section('title', 'Blog Category')

@section('content')

{{-- <link rel="stylesheet" href=" {{ asset('plugins-custom/datatables/media/css/dataTables.bootstrap4.min.css') }} ">
<link rel="stylesheet" href=" {{ asset('plugins-custom/sweetalert-2/sweetalert2.min.css') }} ">
<link rel="stylesheet" href=" {{ asset('plugins-custom/toastr/build/toastr.min.css') }} "> --}}

<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                {{-- <a href="#catBlogCreateModal" data-toggle="modal" class="btn btn-primary"><i class="fas fa-plus"></i> Add new</a> --}}
                <h5>Category list</h5>
            </div>
            <div class="card-body">
                <table class="table table-sm table-hover">
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td> {{ ucwords($item->category_name) }} </td>
                            <td class="text-right">
                                <a href="admin/category/blog/delete/{{ $item->id }}" class="badge badge-dark rounded-0"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="100%" class="text-center">No data found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <br>
                {{ $data->links() }}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h5>Add new category</h5>
            </div>
            <div class="card-body">
                @if (Session::get('success'))
                <div class="alert alert-success">{{(Session::get('success'))}}</div>
                @endif
                @if (Session::get('error'))
                <div class="alert alert-danger">{{(Session::get('error'))}}</div>
                @endif
                <form action="{{ route('categoryBlogCreate') }}" method="POST" id="catBlogCreateForm">
                    @csrf

                    <div class="form-group">
                        <input type="text" class="form-control" name="category" id="category" placeholder="Enter category name" value="{{ old('category') }}">
                        <small class="form-text text-danger">@error('category'){{ $message }}@enderror</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('dashboards.admins.modals.category-blog-create')

{{-- <script src=" {{ asset('plugins-custom/datatables/media/js/jquery.dataTables.min.js') }} "></script>
<script src=" {{ asset('plugins-custom/datatables/media/js/dataTables.bootstrap4.min.js') }} "></script>
<script src=" {{ asset('plugins-custom/sweetalert-2/sweetalert2.min.js') }} "></script>
<script src=" {{ asset('plugins-custom/toastr/build/toastr.min.js') }} "></script> --}}

@endsection

<script>
    // $(function(){
    //     alert('works');
    // });
</script>
