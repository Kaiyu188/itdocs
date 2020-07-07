<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//----------------------> Route old <-------------------------------
// Route::get('/', 'FrontendController@getHome');

// Route::get('TheLoai-{cate_id}-{cate_slug}', 'FrontendController@getCategory');

// Route::get('{cate_id}/DanhMuc-{type_id}-{type_slug}', 'FrontendController@getNewsType');

// Route::get('{news_id}-{news_slugtitle}.html', 'FrontendController@getNews');

// Route::get('about', 'FrontendController@getAbout');

// Route::group(['namespace' => 'Admin'], function () {
//     Route::group(['prefix' => 'quantri', 'middleware' => 'CheckLogedIn'], function () {
//         Route::get('/', 'LoginController@getLogin');
//         Route::post('/', 'LoginController@postLogin');
//     });

//     Route::get('logout', 'HomeController@getLogout');

//     Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function () {
//         Route::get('home', 'HomeController@getHome');

//         Route::group(['prefix' => 'category'], function () {
//             Route::get('/', 'CategoryController@getCate');
//             Route::post('/', 'CategoryController@postCate');

//             Route::get('edit/{id}', 'CategoryController@getEditCate');
//             Route::post('edit/{id}', 'CategoryController@postEditCate');

//             Route::get('delete/{id}', 'CategoryController@getDeleteCate');
//         });

//         Route::group(['prefix' => 'news_type'], function () {
//             Route::get('/', 'NewsTypeController@getType');
//             Route::post('/', 'NewsTypeController@postType');

//             Route::get('edit/{id}', 'NewsTypeController@getEditType');
//             Route::post('edit/{id}', 'NewsTypeController@postEditType');

//             Route::get('delete/{id}', 'NewsTypeController@getDeleteType');
//         });

//         Route::group(['prefix' => 'news'], function () {
//             Route::get('add', 'NewsController@getAddNews');
//             Route::post('add', 'NewsController@postAddNews');

//             Route::get('/', 'NewsController@getNews');

//             Route::get('edit/{id}', 'NewsController@getEditNews');
//             Route::post('edit/{id}', 'NewsController@postEditNews');

//             Route::get('delete/{id}', 'NewsController@getDeleteNews');
//         });
//     });
// });
//----------------------> End Route old <-------------------------------

//----------------------> Route new <-------------------------------
Route::get('/', 'FrontendController@getHome');

Route::get('TheLoai-{cate_id}-{cate_slug}', 'FrontendController@getCategory');

Route::get('{cate_id}/DanhMuc-{type_id}-{type_slug}', 'FrontendController@getNewsType');

Route::get('{news_id}-{news_slugtitle}.html', 'FrontendController@getNews');

Route::get('about', 'FrontendController@getAbout');

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'quantri', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::get('logout', 'HomeController@getLogout');

    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function () {
        Route::resource('home', 'HomeController');

        // Route::group(
        //     ['namespace' => 'News', 'as' => 'news.', 'middleware' => []],
        //     function () {
        //         Route::resource('category', 'CategoryController');
        //         Route::get('category.list', 'CategoryController@getTable');
        //         Route::get('category.modal', 'CategoryController@getOpenModal');
        //         Route::post('category.add', 'CategoryController@postAdd');
        //     });
      
        // Route::resource('news', 'CategoryController');
        // Route::get('news.add', 'CategoryController@openModal');
        // Route::get('news.list', 'CategoryController@getTable');

        // Route::resource('sub_category', 'Sub_CategoryController');

        // Route::group(['prefix' => 'news'], function () {
        //     Route::resource('/', 'CategoryController');
        //     Route::get('category.list', 'CategoryController@getDataTableCate');
        //     Route::get('category.view.add', 'CategoryController@getAddCate');
        //     Route::post('category.add', 'CategoryController@postAddCate');

        //     Route::get('sub_category.list', 'Sub_CategoryController@getDataTableSub');
        //     Route::get('sub_category.view.add', 'Sub_CategoryController@getAddSub');
        //     Route::post('sub_category.add', 'Sub_CategoryController@postAddSub');

        //         Route::get('/', 'CategoryController@getCate');
        //         Route::get('', 'CategoryController@getCate');
        //         Route::post('/', 'CategoryController@postCate');

        //         Route::get('edit/{id}', 'CategoryController@getEditCate');
        //         Route::post('edit/{id}', 'CategoryController@postEditCate');

        //         Route::get('delete/{id}', 'CategoryController@getDeleteCate');
        // });

        // Route::group(['prefix' => 'category'], function () {
        //     Route::get('/', 'CategoryController@getCate');
        //     Route::post('/', 'CategoryController@postCate');

        //     Route::get('edit/{id}', 'CategoryController@getEditCate');
        //     Route::post('edit/{id}', 'CategoryController@postEditCate');

        //     Route::get('delete/{id}', 'CategoryController@getDeleteCate');
        // });

        // Route::group(['prefix' => 'news_type'], function () {
        //     Route::get('/', 'NewsTypeController@getType');
        //     Route::post('/', 'NewsTypeController@postType');

        //     Route::get('edit/{id}', 'NewsTypeController@getEditType');
        //     Route::post('edit/{id}', 'NewsTypeController@postEditType');

        //     Route::get('delete/{id}', 'NewsTypeController@getDeleteType');
        // });

        // Route::group(['prefix' => 'news'], function () {
        //     Route::get('add', 'NewsController@getAddNews');
            // Route::post('add', 'NewsController@postAddNews');

        //     Route::get('/', 'NewsController@getNews');

        //     Route::get('edit/{id}', 'NewsController@getEditNews');
        //     Route::post('edit/{id}', 'NewsController@postEditNews');

        //     Route::get('delete/{id}', 'NewsController@getDeleteNews');
        // });
        Route::group(['prefix' => 'post'], function () {
            Route::view('/test', 'backend.news1.hello');
            Route::get('/', 'NewsController@getNews');
            Route::get('add','NewsController@getAddNews');
            Route::post('add', 'NewsController@postAddNews');

        });
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCate');
            Route::get('edit/{id}', 'CategoryController@getEditCate');
            Route::post('edit/{id}', 'CategoryController@postEditCate');
            Route::post('/','CategoryController@postAddCate');

        });
        Route::group(['prefix' => 'sub_category'], function () {
            Route::get('/','Sub_CategoryController@getAddSub');
        });
    });
});
//----------------------> End Route new <-------------------------------