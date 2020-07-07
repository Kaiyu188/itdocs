<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\NewsType;
use App\Models\News;

class FrontendController extends Controller
{
    //
    public function getHome() {
        $max = News::max('news_solanxem');
        $data['count'] = 0;
        $data['cateList'] = Category::all();
        $data['news_cate'] = News::orderBy('news_id', 'desc')->get();
        $data['newsSolanxem1'] = News::where('news_solanxem', $max)->first();
        $data['newsFeature'] = News::orderBy('news_solanxem', 'desc')->take(6)->get();
        $data['newsNew'] = News::orderBy('news_id', 'desc')->take(6)->get();
        // dd($data);
        return view('frontend.home.index', $data);
    }

    public function getCategory($cate_id) {
        $max = News::max('news_solanxem');
        $data['newsSolanxem4'] = News::where('news_cate', urldecode(base64_decode($cate_id)))->orderBy('news_solanxem', 'desc')->take(4)->get();
        $data['count'] = 0;
        $data['type_List'] = NewsType::where('type_cate', urldecode(base64_decode($cate_id)))->orderBy('type_id', 'desc')->get();
        $data['news_List'] = News::orderBy('news_id', 'desc')->get();
        return view('frontend.category.category', $data);
    }

    public function getNewsType($cate_id, $type_id) {
        $data['type_Name'] = NewsType::where('type_cate', urldecode(base64_decode($cate_id)))->find(urldecode(base64_decode($type_id)));
        $data['newsList'] = News::where([
                                    ['news_cate', urldecode(base64_decode($cate_id))],
                                    ['news_type', urldecode(base64_decode($type_id))]
                            ])->orderBy('news_id', 'desc')->paginate(10);
        $data['newsSolanxem4'] = News::where('news_type', urldecode(base64_decode($type_id)))->orderBy('news_solanxem', 'desc')->take(4)->get();
        return view('frontend.newstype.newstype', $data);
    }

    public function getNews($news_id) {
        $data['news_Item'] = News::join('categories', 'news.news_cate', '=', 'categories.cate_id')
                                ->join('newstypes', 'news.news_type', '=', 'newstypes.type_id')
                                ->join('users', 'news.news_users', '=', 'users.id')->find(urldecode(base64_decode($news_id)));
        $data['news_List'] = News::join('categories', 'news.news_cate', '=', 'categories.cate_id')
                                ->join('newstypes', 'news.news_type', '=', 'newstypes.type_id')->take(4)->get();
        $data['news_cungtheloai'] = News::orderBy('news_id', 'desc')->get();
        $data['count'] = 0;
        // $data['author'] = News::join('users', 'news.news_users', '=', 'users.id')->get();
        $data['news_cungtheloai'] = News::orderBy('news_id', 'desc')->get();
        return view('frontend.post.post', $data);
    }

    public function getAbout() {
        $data['popular'] = News::orderBy('news_solanxem', 'desc')->take(3)->get();
        return view('frontend.about', $data);
    }
}
