@extends('backend.master.master')
@section('title','Quản trị danh mục')
@section('main')
<head>
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\select2\css\select2.min.css"> 

    <!-- Data table css -->
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\extensions\responsive\css\responsive.dataTables.css"> --}}

    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap-multiselect\css\bootstrap-multiselect.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\multiselect\css\multi-select.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\j-pro\css\j-forms.css">

    <!-- ico font -->
    <link href="files\assets\icon\icofont\css\icofont.css" rel="stylesheet">

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
                    </div>

                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <h5>Ajax Data Source (Arrays)</h5> -->
                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="" role="tab" aria-expanded="true"><i class="feather icon-credit-card"></i> Thể loại</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                
                                            </li>
                                            <li class="nav-item">
                                                
                                            </li>
                                            <li class="nav-item">
                                                <button id="btn_category" class="btn btn-primary float-lg-right" data-toggle="modal" data-target="#addBtn">Thêm danh mục</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive dt-responsive">
                                            <table id="datatable_category" class="table" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">Tên danh mục</th>
                                                        <th class="text-center">Độ ưu tiên</th>
                                                        <th class="text-right">Tùy chọn</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($category ?? '' as $cate)
                                                        <tr>
                                                            <td class="text-center">{{$cate->cate_id}}</td>
                                                            <td class="text-center">{{$cate->cate_name}}</td>
                                                            <td class="text-center">{{$cate->cate_priority}}</td>
                                                            <td class="text-right"><a href="{{asset('admin/category/edit/'. $cate->cate_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a></td>
                                                        </tr>
                                                    @endforeach
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
{{-- <div class="modal fade" id="modal_parent">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" id="modal_body">
        </div>
    </div>
</div> --}}


<div class="modal fade" id="addBtn"  role="dialog" aria-labelledby="addBtn" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        @include('backend.news.category.add')
    </div>
    </div>
  </div>
  

{{-- end modal detail--}}
@endsection

@push('scripts')
{{-- <script type="text/javascript" src="files\assets\js\component\news\category\index.js"></script>
<script type="text/javascript" src="files\assets\js\component\news\category\add.js"></script> --}}

<!-- data-table js -->
{{-- <script type='text/javascript' src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
<script src="files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="files\assets\pages\data-table\js\jszip.min.js"></script>
<script src="files\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="files\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
<script src="files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script> --}}

<!-- Select 2 js -->
<script type="text/javascript" src="files\bower_components\select2\js\select2.full.min.js"></script>
<script type="text/javascript" src="..\files\assets\pages\advance-elements\select2-custom.js"></script> 
@endpush
