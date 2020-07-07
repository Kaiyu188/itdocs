@extends('frontend.master')
@section('title', 'Thể loại')
@section('main')
<body class="cp_theme-style-1  cp_theme-2-bg">
 
<div id="wrapper">
 
    <header id="cp-header-style-1">
    
    <nav class="navbar navbar-inverse">
    <div class="container">
    <div class="navbar-header">
    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <strong class="logo"><a href="index-2.html"><img src="images/logo.png" alt="img"></a></strong> </div>

    @include('frontend.menu')
    
    </div>
    </nav>
    
    </header>
    
    
    
    <section class="inner-head shadow-none">
        <div class="container">
        <h1>Thể loại</h1>
            <ol class="breadcrumb">
                <li><a href="{{asset('/')}}">Home</a></li>
                <li class="active">{{ $cate_Item->cate_name }}</li>
            </ol>
        </div>
    </section>

    <div id="main">    
        <section class="gallery-page gallery-3">
            <div class="container">
            @foreach ($type_List as $type)
                <ul class="row">              
                    <h2><a href="#">{{ $type->type_name }}</a></h2>
                    @foreach ($news_List as $news)
                        <li class="col-md-4 col-sm-6">
                            <div class="box">
                                <div class="frame"><a href="#"><img width="360px" height="360px" src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt="img"></a></div>
                                <div class="caption">
                                    <div class="inner">
                                        <h2>{{ $news->news_title }}</h2>
                                        <em>Posted on June 20, 2015</em>
                                        <p>{{ $news->news_summary }}</p>
                                        <a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}" class="btn-continue">Đọc tiếp</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endforeach
            </div>
    
            <div class="cp-pagination margin-none">
                <div class="container">
                    <nav>
                        {{ $type_List->links() }}
                    </nav>
                </div>
            </div>
    
        </section>
    
    </div>
 
 
</div>
@endsection