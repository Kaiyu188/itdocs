@extends('backend.master.master')
@section('title','Quản trị danh mục')
@section('main')
<head>
    {{--  <link rel="stylesheet" type="text/css" href="..\files\bower_components\select2\css\select2.min.css">  --}}

    <!-- Data table css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\extensions\responsive\css\responsive.dataTables.css">

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap-multiselect\css\bootstrap-multiselect.css">
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}">
    <link rel="stylesheet" type="text/css" href="files\bower_components\multiselect\css\multi-select.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\j-pro\css\j-forms.css">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<div id="pcoded" class="pcoded">
    <div class="pcoded-wrapper">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div id="div_category" class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h3>Danh mục</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Danh mục</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="div_sub_cate" class="row align-items-end d-none">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h3>Danh mục con</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Danh mục con</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="div_post" class="row align-items-end d-none">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h3>Bài viết</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Bài viết</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <h5>Ajax Data Source (Arrays)</h5> -->
                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a id="category" class="nav-link active" data-toggle="tab" href="" role="tab" aria-expanded="true"><i class="feather icon-credit-card"></i> Thể loại</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a id="sub_cate" class="nav-link" data-toggle="tab" href="" role="tab" aria-expanded="false"><i class="feather icon-sidebar"></i> Loại tin</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a id="post" class="nav-link" data-toggle="tab" href="" role="tab" aria-expanded="false"><i class="feather icon-edit-1"></i> Bài viết</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <button id="btn_category" class="btn btn-primary float-lg-right" data-toggle="modal">Thêm danh mục</button>
                                                <button id="btn_sub_cate" class="btn btn-primary float-lg-right d-none" data-toggle="modal">Thêm danh mục con</button>
                                                <button id="btn_post" class="btn btn-primary float-lg-right d-none" data-toggle="modal">Thêm bài viết</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="table_category" class="card-block">
                                        <div class="table-responsive dt-responsive">
                                            <table id="dt-ajax-array1" class="table" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">Tên danh mục</th>
                                                        <th class="text-center">Độ ưu tiên</th>
                                                        <th class="text-right">Tùy chọn.</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="table_sub_cate" class="card-block d-none">
                                        <div class="table-responsive dt-responsive">
                                            <table id="dt-ajax-array2" class="table" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">Tên danh mục con</th>
                                                        <th class="text-center">Thuộc danh mục</th>
                                                        <th class="text-center">Độ ưu tiên</th>
                                                        <th class="text-right">Tùy chọn.</th>
                                                    </tr>
                                                </thead>
                                                {{--  <tfoot>
                                                    <tr>
                                                        <th class="text-center">1</th>
                                                        <th class="text-center">Lập trình</th>
                                                        <th class="text-center">Lập trình</th>
                                                        <th class="text-center">1</th>
                                                        <th class="td-button">
                                                            <div class="btn-group btn-group-sm float-right">
                                                                <button type="button" class="tabledit-edit-button btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#modal" id="btn" style="float: none;margin: 5px;" onclick="editDetail()"><span class="icofont icofont-ui-edit"></span></button>
                                                                <button type="button" class="tabledit-edit-button btn btn-danger waves-effect waves-light" style="margin: 5px;" onclick="cancelDetail()"><span class="icofont icofont-ui-delete"></span></button>
                                                                <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-checklist-good-detail" id="btn-autoload-select" style="float: none;margin: 5px;" onclick="detailTable()"><span class="icofont icofont-eye-alt"></span></button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tfoot>  --}}
                                            </table>
                                        </div>
                                    </div>
                                    <div id="table_post" class="card-block d-none">
                                        <div class="table-responsive dt-responsive">
                                            <table id="dt-ajax-array" class="table" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">Tiêu đề</th>
                                                        <th class="text-center">Nỗi bật/Thường</th>
                                                        <th class="text-center">Ngày đăng</th>
                                                        <th class="text-center">Lượt xem</th>
                                                        <th class="text-center">Thuộc danh mục</th>
                                                        <th class="text-center">Thuộc danh mục con</th>
                                                        <th class="text-center">Người đăng</th>
                                                        <th class="text-right">Tùy chọn.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="text-center">1</th>
                                                        <th class="text-center">Lập trình</th>
                                                        <th class="text-center">1</th>
                                                        <th class="text-center">1</th>
                                                        <th class="text-center">Lập trình</th>
                                                        <th class="text-center">1</th>
                                                        <th class="text-center">Lập trình</th>
                                                        <th class="text-center">1</th>
                                                        <th class="td-button">
                                                            <div class="btn-group btn-group-sm float-right">
                                                                <button type="button" class="tabledit-edit-button btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#modal" id="btn" style="float: none;margin: 5px;" onclick="editDetail()"><span class="icofont icofont-ui-edit"></span></button>
                                                                <button type="button" class="tabledit-edit-button btn btn-danger waves-effect waves-light" style="margin: 5px;" onclick="cancelDetail()"><span class="icofont icofont-ui-delete"></span></button>
                                                                <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-checklist-good-detail" id="btn-autoload-select" style="float: none;margin: 5px;" onclick="detailTable()"><span class="icofont icofont-eye-alt"></span></button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- modal detail--}}
<div class="modal fade" id="modal_parent">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" id="modal_body">
        </div>
    </div>
</div>
{{-- end modal detail--}}

{{-- modal detail--}}
<div class="modal fade" id="modal_sub_category_add_parent">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" id="modal_sub_category_add_body">
        </div>
    </div>
</div>
{{-- end modal detail--}}
@endsection

@push('scripts')
<script type="text/javascript" src="files\assets\js\component\posts\index.js"></script>
<script type="text/javascript" src="files\assets\js\component\posts\create_sub.js"></script>
<script type="text/javascript" src="files\assets\js\component\posts\create_cate.js"></script>


<!-- data-table js -->
<script type='text/javascript' src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
<script src="files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="files\assets\pages\data-table\js\jszip.min.js"></script>
<script src="files\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="files\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
<script src="files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>

<!-- Select 2 js -->
{{--  <script type="text/javascript" src="files\bower_components\select2\js\select2.full.min.js"></script>
<script type="text/javascript" src="..\files\assets\pages\advance-elements\select2-custom.js"></script>  --}}
@endpush
