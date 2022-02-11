<?php
/**
 * @var \App\Models\SubCategory $subCategory
 */
?>

@extends('layouts.admin')

@push('addition-script')
    <script src="{{ asset('admin_assets/global_assets/js/plugins/tables/footable/footable.min.js') }}"></script>
    <script src="{{ asset('admin_assets/global_assets/js/demo_pages/table_responsive.js') }}"></script>
@endpush
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> -
                    Dashboard</h4>
                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.main') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Главный</a>
                    <span class="breadcrumb-item active">Список книг</span>
                </div>

                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Категории</h5>
            </div>

            <div class="card-body">
                <a href="{{ route('admin.sub_categories.create') }}" class="btn btn-success">Добавить</a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Название</th>
                        <th>Дата создания</th>
                        <th class="text-center" style="width: 30px;"><i class="icon-menu-open2"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subCategories as $i=>$subCategory)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td><a href="#">{{ $subCategory->getTitle() }}</a></td>
                            <td>{{ $subCategory->getCreatedAt() }}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-address-book"></i>
                                                Больше</a>
                                            <a href="#" class="dropdown-item bg-primary"><i class="icon-pencil text-white"></i>
                                                Изменить</a>
                                            <a href="#" class="dropdown-item bg-danger"><i class="icon-trash"></i>
                                                Удалить</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic responsive table -->
    </div>
    <!-- /content area -->

@endsection
