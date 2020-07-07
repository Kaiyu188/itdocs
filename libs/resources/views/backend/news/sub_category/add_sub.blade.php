<form method="POST">
    <div class="modal-header">
        <h4 class="modal-title">Thêm danh mục con</h4>
        <label class="label label-warning d-none float-right" id="label-footer-help">Thêm danh mục</label>
    </div>
    <div class="modal-body background-body-color text-left">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="sub-title">Thông tin danh mục con</h5>
                        <div class="form-group row">
                            <div class="col-lg-4 col-form-label">
                                Tên danh mục con
                            </div>
                            <div class="col-lg-8">
                                <input name="sub_name" type="text" class="w-inherit form-control" required placeholder="Nhập tên danh mục đêiiiiiiiiiiiiii">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-form-label">
                                Độ ưu tiên
                            </div>
                            <div class="col-lg-8">
                                <input name="sub_priority" type="number" class="w-inherit form-control" required placeholder="Nhập độ ưu tiên của danh mục nhaaaaaaaaaaa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-form-label">
                                Thuộc danh mục
                            </div>
                            <div class="col-lg-8">
                                <select id="change_cate_create" class="js-example-basic-single col-sm-12">
                                    <option value="0" disabled selected hidden>---Chọn chi nhánh---</option>
                                    @foreach($listCate_select_sub as $cate)
                                    <option value="{{$cate->cate_id}}" name="{{$cate->cate_name}}">
                                        {{$cate->cate_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn_create_sub_category" onclick="createSub_Category()">Thêm</button>
        <button type="button" class="btn btn-default waves-effect" id="btn_close_modal_sub">Hủy bỏ</button>
    </div>
</form>
