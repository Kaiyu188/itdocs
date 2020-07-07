@extends('frontend.master')
@section('title', 'Chi tiết')
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
    
    
    
    {{--  <section class="inner-head shadow-none">
    <div class="container">
    <h1>{{ $news_Item-> }}</h1>
    <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Gallery Post</li>
    </ol>
    </div>
    </section>  --}}
    
    <div id="main">
    
        <section class="cp-post-type">
            <div class="container">
                <div class="col-md-8">
                    <div class="box">
                        <h2 style="display: flex; justify-content: left;"><a href="#">{{ $news_Item->news_title }}</a></h2>
                        <div class="cp-admin-row">
                            <ul>
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#"><i class="fa fa-tags"></i>{{ $news_Item->type_name }}</a></li>
                                <li><a href="#"><i class="fa fa-calendar"></i>June 15, 2015</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>Comments 22</a></li>
                            </ul>
                        </div>
                        <div class="sound-frame"><a href="#"><img width="680px" height="375px" src="{{asset('libs/storage/app/avatar/'.$news_Item->news_img)}}" alt="img"></a></div>
                        <div class="text"> <strong class="title">{{ $news_Item->news_summary }}</strong> </div>
                        <p>{!! $news_Item->news_content !!}</p>
                        <div class="share-row">
                            <h4>Share on</h4>
                            <ul>
                                <li class="color-1"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                <li class="color-2"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li class="color-3"><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                                <li class="color-4"><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="post-rinky">
                        <h2 style="display: flex; justify-content: left;">Những bài viết liên quan</h2>
                        <div class="row">
                        @foreach ($news_List as $news)
                            <div class="col-md-3 col-sm-6">
                                <div class="box-01">
                                    <div class="frame"><a href="#"><img width="160px" height="160px" src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt="img"></a></div>
                                    <a href="#" class="title">{{ $news->news_title }}</a>
                                </div>
                            </div>
                        @endforeach
                        </div>
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
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
@endsection