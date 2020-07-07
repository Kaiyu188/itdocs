<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddNewsRequest;
use App\Models\News;
use App\Models\Sub_Cate;
use App\Models\Category;
use App\User;
use Carbon\Carbon;
use Auth;

class NewsController extends Controller
{
    //
    public function getAddNews() {
        $data['type'] = Sub_Cate::all();
        $data['cate'] = Category::all();
        return view('backend.news1.addnews', $data);
    }

    public function postAddNews(AddNewsRequest $request) {
        // $type = NewsType::join('categories', 'sub_categories.sub_cate', '=', 'categories.cate_id')->find($request->type);

        $filename = $request->img->getClientOriginalName();
        $news = new News;
        $news->news_title = $request->title;
        $news->news_slugtitle = str_slug($request->title);
        $news->news_img = $filename;
        $news->news_summary = $request->summary;
        $news->news_feature = $request->featured;
        $news->news_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $news->news_content = $request->content;
        $news->news_views = 0;
        $news->news_users = Auth::user()->id;
        // $news->news_type = $request->type;
        // $news->news_cate = $type->cate_id;
        $news->save();
        $request->img->storeAs('avatar', $filename);
        return back();
    }

    public function getNews() {
        $data['newslist'] = News::all();
        return view('backend.news1.news', $data);
    }

    public function getEditNews($id) {
        $data['news'] = News::join('newstypes', 'news.news_type', '=', 'newstypes.type_id')->find($id);
        $data['newstypelist'] = NewsType::all();
        return view('backend.news.editnews', $data);
    }

    public function postEditNews(AddNewsRequest $request, $id) {
        $type = NewsType::join('categories', 'newstypes.type_cate', '=', 'categories.cate_id')->find($request->type);

        $news = new News;
        $arr['news_title'] = $request->title;
        $arr['news_slugtitle'] = str_slug($request->title);
        $arr['news_summary'] = $request->summary;
        $arr['news_feature'] = $request->featured;
        $arr['news_cate'] = $type->cate_id;
        $arr['news_type'] = $request->type;
        $arr['news_content'] = $request->content;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['news_img']= $img;
            $request->img->storeAs('avatar', $img);
        }
        $news::where('news_id', $id)->update($arr);
        return redirect()->intended('admin/news');
    }

    public function getDeleteNews($id) {
        News::destroy($id);
        return back();
    }
}
