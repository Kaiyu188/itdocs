<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sub_Cate;
use App\Models\Category;
use Auth;
use Yajra\Datatables\Datatables;

class Sub_CategoryController extends Controller
{
    public function getAddSub() {
        $data['listCate_select_sub'] = Category::all();
        return view('backend.news.sub_category.news_type', $data);
    }

    public function getDataTableSub() {
        $data['listSub_Cate'] = Sub_Cate::all();
        // dd($data);
        return Datatables::of($data['listSub_Cate'])
        ->addColumn('sub_name', function($row) {
            return '<label class="alert-info">' . ((object)$row)->name . '</label>';
        })
        ->addColumn('sub_priority', function($row) {
            return '<label class="alert-danger">' . ((object)$row)->priority . '</label>';
        })
        ->addColumn('action', function ($row) {
            if (Auth::user()->level == 1) {
                return '<div class="btn-group btn-group-sm float-right">
                            <button type="button" class="tabledit-edit-button btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#modal" id="btn" style="float: none;margin: 5px;" onclick="editDetail(' . ((object)$row)->id . ')"><span class="icofont icofont-ui-edit"></span></button>
                            <button type="button" class="tabledit-edit-button btn btn-danger waves-effect waves-light" style="margin: 5px;" onclick="cancelDetail(' . ((object)$row)->id . ')"><span class="icofont icofont-ui-delete"></span></button>
                            <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-checklist-good-detail" id="btn-autoload-select" style="float: none;margin: 5px;" onclick="detailTable(' . ((object)$row)->id . ')"><span class="icofont icofont-eye-alt"></span></button>
                        </div>';
            } else {
                return '<div class="btn-group btn-group-sm float-right">
                    <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-checklist-good-detail" id="btn-autoload-select" style="float: none;margin: 5px;" onclick="detailTable(' . ((object)$row)->id . ')"><span class="icofont icofont-eye-alt"></span></button>
                </div>';
            }
        })
        ->rawColumns(['sub_name', 'sub_priority', 'action'])
        ->make(true);
    }

    public function postAddSub(Request $request) {
        $sub = new Sub_sub;
        // $sub->sub_name = $request->sub_name;
        // $sub->sub_slug = str_slug($request->sub_name);
        // $sub->sub_priority = $request->sub_priority;
        // $sub->sub_cate = $request->sub_cate;
        // $sub->save();

        $sub->sub_name = 'java';
        $sub->sub_slug = 'java';
        $sub->sub_priority = 2;
        $sub->sub_cate = 1;
        $sub->save();
        return response()->json(['success'=>'Thành công']);
    }
}
