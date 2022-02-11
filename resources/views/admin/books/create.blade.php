@extends('layouts.admin')

@push('addition-script')
    <script src="{{ asset('admin_assets/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/global_assets/js/demo_pages/form_layouts.js') }}"></script>
@endpush

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Добавление категории</span></h4>
                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.main') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="{{ route('admin.categories.index') }}" class="breadcrumb-item">Список категории</a>
                    <span class="breadcrumb-item active">Добавить</span>
                </div>

                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!-- Vertical form options -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic layout-->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic layout</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.categories.store')}}">
                            <div class="form-group">
                                <label>Название уз:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Название ру:</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /basic layout -->
            </div>
        </div>
        <!-- /vertical form options -->
    </div>
    <!-- /content area -->
@endsection
