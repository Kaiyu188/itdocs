<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsType;
use App\Models\Category;

class NewsTypeController extends Controller
{
    //
    public function getType() {
        $data['listcate'] = Category::all();
        $data['listtype'] = NewsType::join('categories', 'newstypes.type_cate', '=', 'categories.cate_id')->get();
        return view('backend.news_type.news_type', $data);
    }

    public function postType(Request $request) {
        $type = new NewsType;
        $type->type_name = $request->name;
        $type->type_slug = str_slug($request->name);
        $type->type_cate = $request->cate;
        $type->save();
        return back();
    }

    public function getEditType($id) {
        $data['typeItem'] = NewsType::join('categories', 'newstypes.type_cate', '=', 'categories.cate_id')->find($id);
        $data['catelist'] = Category::all();
        return view('backend.news_type.editnews_type', $data);
    }

    public function postEditType(Request $request, $id) {
        $type = NewsType::find($id);
        $type->type_name = $request->name;
        $type->type_slug = str_slug($request->name);
        $type->type_cate = $request->cate;
        $type->save();
        return redirect()->intended('admin/news_type');
    }

    public function getDeleteType($id) {
        NewsType::destroy($id);
        return back();
    }
}
