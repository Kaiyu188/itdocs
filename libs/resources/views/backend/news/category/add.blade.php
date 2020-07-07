<form method="POST">
    <div class="modal-header">
        <h4 class="modal-title">Thêm danh mục</h4>
        <label class="label label-warning d-none float-right" id="label-footer-help">Thêm danh mục</label>
    </div>
    <div class="modal-body background-body-color text-left">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="sub-title">Thông tin danh mục</h5>
                        <div class="form-group row">
                            <div class="col-lg-4 col-form-label">
                                Tên danh mục
                            </div>
                            <div class="col-lg-8">
                                <input name="cate_name" type="text" class="w-inherit form-control" required placeholder="Nhập tên danh mục đêiiiiiiiiiiiiii">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-form-label">
                                Độ ưu tiên
                            </div>
                            <div class="col-lg-8">
                                <input name="cate_priority" type="number" class="w-inherit form-control" required placeholder="Nhập độ ưu tiên của danh mục nhaaaaaaaaaaa">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal-footer">
        {{--  <button type="button" class="btn btn-success btn-sm" id="pnotify-solid-success" onclick="createCategory()">Thêm<i class="icofont icofont-play-alt-2"></i></button>  --}}
        {{-- <button type="button" class="btn btn-primary waves-effect waves-light" onclick="createCategory()">Thêm</button> --}}
        <input type="submit" name="submit" class="btn btn-primary waves-effect waves-light" value="Thêm">
        <button type="button" class="btn btn-default waves-effect" id="btn_close_modal_cate" data-dismiss="modal">Hủy bỏ</button>
    </div>
</form>
