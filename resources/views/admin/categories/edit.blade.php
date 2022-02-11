<?php
/**
 * @var Category $categories
 */

use App\Models\Category;

?>

@extends('layouts.admin')

@push('addition-script')
    <script src="{{ asset('admin_assets/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/global_assets/js/demo_pages/form_layouts.js') }}"></script>
    <script src="{{ asset('admin_assets/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js') }}"></script>
    <script src="{{ asset('admin_assets/global_assets/js/demo_pages/form_select2.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function (){

            $('[name="lang"]').on('change', function() {
                $.ajax({
                    type:    'get',
                    url:     window.location.origin + '/api/categories/getCategory/' + {{ request()->route('id') }},
                    headers:    {lang: this.value},
                    success: function (data){
                        $('[name="name"]').val(data.data.name);
                    }
                });
            });
        });
    </script>
@endpush

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-lg-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i>
                    <span class="font-weight-semibold">Изменение категории</span></h4>
                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.main') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="{{ route('admin.categories.index') }}" class="breadcrumb-item">Список категории</a>
                    <span class="breadcrumb-item active">Изменение</span>
                </div>

                <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
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
                        <h5 class="card-title">Изменение</h5>
                        @include('include.responses')
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.categories.store')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="name">Название:</label>
                                <input type="text" name="name" class="form-control" placeholder="Язык не выбран!" id="name">
                            </div>

                            <div class="form-group">
                                <label class="d-block" for="lang">Язык:</label>
                                <select class="form-control select-fixed-single" data-fouc name="lang" id="lang">
                                    <option value="">Не выбрано</option>
                                    <option value="uz">uz</option>
                                    <option value="ru">ru</option>
                                </select>
                            </div>

                            <div class="text-right">
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Назад</a>
                                <button type="submit" class="btn btn-success">Изменить</button>
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
