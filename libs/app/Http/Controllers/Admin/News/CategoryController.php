<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\Datatables\Datatables;
use Auth;

class CategoryController extends Controller
{
    //
    public function index() {
        $active = 'CATEGORY';
        return view('backend.news.category.index', compact('active'));
    }

    public function getTable() {
        $data['listCate'] = Category::all();
        foreach($data['listCate'] as $test) {
            $temp = array(
                'id' => $test->cate_id,
                'name' => $test->cate_name,
                'priority' => $test->cate_priority,
            );
            $data['data'][] = $temp;
        }
        // dd($data);
        return Datatables::of($data['data'])
        ->addColumn('cate_name', function($row) {
            return '<label class="alert-info">' . ((object)$row)->name . '</label>';
        })
        ->addColumn('cate_priority', function($row) {
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
        ->rawColumns(['cate_name', 'cate_priority', 'action'])
        ->make(true);
    }

    public function getOpenModal() {
        return view('backend.news.category.add');
    }

    public function postAdd(Request $request) {
        $cate = new Category;
        $cate->cate_name = $request->cate_name;
        $cate->cate_slug = str_slug($request->cate_name);
        $cate->cate_priority = $request->cate_priority;
        $cate->save();
        return response()->json(['success'=>'Thành công']);
    }
}
