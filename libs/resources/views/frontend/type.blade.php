@extends('frontend.master')
@section('title', 'Danh mục')
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
        <h1>Danh mục</h1>
        <ol class="breadcrumb">
            <li><a href="{{asset('/')}}">Home</a></li>
            <li class="active">{{ $cate_Name->cate_name }}</li>
            <li class="active">{{ $type_Name->type_name }}</li>
        </ol>
    </div>
</section>
 
<div id="main">
 
<section class="gallery-page">
    <div class="container">
        <div class="col-md-8">
        @foreach ($newsList as $news)
            <ul class="row gallery">
                <li class="col-md-12 col-sm-6">
                    <div class="box">
                        <div class="frame"><a href="#"><img src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt="img"></a></div>
                        <div class="caption">
                            <div class="inner">
                                <div class="zoom-row"> <a href="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" class="zoom" data-rel="prettyPhoto[gallery1]"><i class="fa fa-search"></i></a> <a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}" class="link"><i class="fa fa-link"></i></a> </div>
                                <h2>{{ $news->news_title }}</span></h2>
                                <b>June 15</b>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        @endforeach
            <div class="cp-pagination margin-none">
                <nav>
                    {{ $newsList->links() }}
                </nav>
            </div>
        </div>
    

        <div class="col-md-4">
            <div class="gallery-sidebar">
                <aside>
                    <div class="sidebar">
                        <div class="about-author">
                            <h4>About Word Mag</h4>
                            <div class="frame"><a href="#"><img src="images/author-img.png" alt="img"></a>
                                <div class="caption">John Anderson</div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget ullamcorper, eu tempor erat. Nullam et sollicitudin dui. Phasellus a elementum augue <a href="#" class="fb">Facebook</a> or <a href="#" class="tw">Twitter.</a></p>
                        </div>
                        <form action="#" class="sidebar-search">
                            <strong class="title">Need to Find Something </strong>
                            <div class="input-box">
                                <input name="" type="text" placeholder="enter your keywords">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                            <a href="#" class="btn-enter">[ Press Enter ]</a>
                        </form>
                        <div class="cp-archives">
                            <h4>Archives</h4>
                            <ul>
                                <li><a href="#"><span>June 2015</span><em>(30)</em></a></li>
                                <li><a href="#"><span>May 2015</span><em>(120)</em></a></li>
                                <li><a href="#"><span>April 2015</span><em>(10)</em></a></li>
                                <li><a href="#"><span>March 2015</span><em>(78)</em></a></li>
                                <li><a href="#"><span>February 2015</span><em>(67)</em></a></li>
                                <li><a href="#"><span>January 2015</span><em>(53)</em></a></li>
                            </ul>
                        </div>
                        <div class="cp-instagram">
                            <h4>Instagram</h4>
                            <ul>
                                <li><a href="#"><img src="images/index-2/instagram/instagram-img-1.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="images/index-2/instagram/instagram-img-2.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="images/index-2/instagram/instagram-img-3.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="images/index-2/instagram/instagram-img-4.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="images/index-2/instagram/instagram-img-5.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="images/index-2/instagram/instagram-img-6.jpg" alt="img"></a></li>
                            </ul>
                        </div>
                        <div class="popular-posts">
                            <h4>Popular Posts</h4>
                            <ul>
                                <li>
                                    <div class="frame"><a href="#"><img src="images/index-2/popular-post-img.jpg" alt="img"></a></div>
                                    <div class="text-box"> <a href="#" class="title">Donec in arcu ac elit</a>
                                        <p>Cras non libero dui. Cras augue velit, venenatis vel dolor...</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="frame"><a href="#"><img src="images/index-2/popular-post-img-2.jpg" alt="img"></a></div>
                                    <div class="text-box"> <a href="#" class="title">In lacinia diam ac congue</a>
                                        <p>Sed convallis odio eu purus bibendum, scelerisque auctor arcu...</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="frame"><a href="#"><img src="images/index-2/popular-post-img-3.jpg" alt="img"></a></div>
                                    <div class="text-box"> <a href="#" class="title">Mauris ultrices orci non</a>
                                        <p>Donec faucibus nulla ligula, eu pellentesque sem...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="cp-tags">
                            <h4>Tags</h4>
                            <ul>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Celebrities</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Film</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Celebrities</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Politics</a></li>
                            </ul>
                        </div>
                        <div class="latest-comments">
                            <h4>Latest Comments</h4>
                            <ul>
                                <li>
                                    <div class="box">
                                        <div class="frame"><a href="#"><img src="images/index-2/comments-img-1.jpg" alt="img"></a></div>
                                        <div class="inner-text"> <strong class="title">John Doe</strong> <a href="#">Image Post Format</a> </div>
                                        <div class="text-box">
                                            <p>Pellentesque in leo vitae tellus fringilla tincidunt imperdiet non risus. Aliquam pretium urna.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <div class="frame"><a href="#"><img src="images/index-2/comments-img-2.jpg" alt="img"></a></div>
                                        <div class="inner-text"> <strong class="title">Maria Anderson</strong> <a href="#">Video Post Format</a> </div>
                                        <div class="text-box">
                                            <p>Pellentesque in leo vitae tellus fringilla tincidunt imperdiet non risus. Aliquam pretium urna.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <form action="#" class="sidebar-search">
                            <strong class="title">Subscribe to Newsletter </strong>
                            <div class="input-box">
                                <input name="" type="text" placeholder="your email address">
                                <button><i class="fa fa-envelope"></i></button>
                            </div>
                            <a href="#" class="btn-enter">[ Press Enter ]</a>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
 
</div>
@endsection