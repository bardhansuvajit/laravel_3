
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <base href=" {{ \URL::to('/') }} ">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="javascript: void(0)" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" data-widget="control-sidebar" data-slide="true" href="{{ route('logout') }}" role="button" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href=" {{ route('admin.dashboard') }} " class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src=" {{ Auth::user()->picture }} " class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href=" {{ route('admin.profile') }} " class="d-block"> {{ Auth::user()->name; }} </a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href=" {{ route('admin.dashboard') }} " class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.category') }} " class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Category
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.blog') }} " class="nav-link {{ (request()->is('admin/blog*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Blog
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.testimonial') }} " class="nav-link {{ (request()->is('admin/testimonial*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-quote-left"></i>
                            <p>
                                Testimonial
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.faq') }} " class="nav-link {{ (request()->is('admin/faq*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-comment"></i>
                            <p>
                                FAQ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.contacts') }} " class="nav-link {{ (request()->is('admin/contacts*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-phone fa-rotate-90"></i>
                            <p>
                                Contacts
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.users') }} " class="nav-link {{ (request()->is('admin/users*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.profile') }} " class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{ route('admin.settings') }} " class="nav-link {{ (request()->is('admin/settings*')) ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href=" {{ route('admin.dashboard') }} ">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            by Suvajit Bardhan
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function(){
        /* UPDATE ADMIN PERSONAL INFO */
        $('#AdminInfoForm').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method'),
                data:new FormData(this),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(document).find('span.error-text').text('');
                },
                success:function(data){
                    if(data.status == 0) {
                        $.each(data.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    } else {
                        $('.admin_name').each(function(){
                            $(this).html( $('#AdminInfoForm').find( $('input[name="name"]') ).val() );
                        });
                        alert(data.msg);
                    }
                }
            });
        });

        // $('#catBlogCreateForm').on('submit', function(e) {
        //     e.preventDefault();
        // });

        // $('#AdminInfoForm').on('submit', function(e){
        //     e.preventDefault();

        //     $.ajax({
        //         url: $(this).attr('action'),
        //         method: $(this).attr('method'),
        //         data: new FormData(this),
        //         processData: false,
        //         dataType: 'json',
        //         contentType: false,
        //         beforeSend: function() {

        //         },
        //         success: function(data) {
        //             if (data.status == 0) {

        //             } else {
        //                 $('#AdminInfoForm')[0].reset();
        //             }
        //         },
        //     });
        // });
    });
</script>
