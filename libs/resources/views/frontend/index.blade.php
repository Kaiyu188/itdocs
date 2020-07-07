@extends('frontend.master')
@section('title', 'Home')
@section('main')
    
    <body class="cp_theme-style-1 cp_theme-4-bg">
    
    <div id="wrapper">
    
    <header id="cp-header-style-1" class="cp-header-style-4">
    
    <nav class="navbar navbar-inverse">
    <div class="container">
    <div class="navbar-header">
    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    
    @include('frontend.menu')
    
    </div>
    </nav>
    
    <div class="container">
    <div class="bottom-row">
    <ul class="head-4-social">
    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
    <form action="#" class="head-4-search">
    <input name="text" type="text" placeholder="Search...">
    </form>
    <strong class="logo"><a href="index-2.html"><img src="images/logo.png" alt="img"></a></strong> </div>
    </div>
    </header>
    
    
    <div id="main">
    
    <section class="theme-4-post">
        <div class="container">
            <div class="cp-post-box-2">
            @foreach ($newslist as $news)
                <div class="row">
                    <div class="col-md-2">
                        <div class="left-box"> 
                            <strong class="date">May 11<br>2015</strong> <em>by Simons<br>Business</em> @if ($news->news_feature == 1) <span>Featured Post</span> @endif 
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="frame"><a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}"><img width="945px" height="650px" src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt="img"></a></div>
                        <div class="text-box">
                            <h2><a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}">{{ $news->news_title }}</a></h2>
                            <div class="inner"> 
                                <strong>{{ $news->news_summary }}</strong>
                                <p>{!! $news->news_content !!}</p>
                                <a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}" class="btn-continue">Đọc tiếp...</a> 
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            
            <div class="cp-pagination">
                <div class="container">
                    <nav>
                        {{ $newslist->links() }}
                    </nav>
                </div>
            </div>
    
        </div>
    </section>
    
    </div>
 @endsection