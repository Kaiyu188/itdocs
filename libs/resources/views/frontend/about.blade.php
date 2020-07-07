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
 
 
 
<section class="inner-head">
<div class="container">
<h1>About Me</h1>
<ol class="breadcrumb">
<li><a href="{{asset('/')}}">Home</a></li>
<li class="active">About Me</li>
</ol>
</div>
</section>
 
<div id="main">
 
<section class="cp-about-1">
<div class="container">
<div class="about-text-row">
<div class="row">
<div class="col-md-5">
<div class="left-box">
<div class="frame"><a href="#"><img src="images/about/about-img-1.jpg" alt="img"></a></div>
<div class="about-social">
<ul>
<li class="color-1"><a href="#"><i class="fa fa-facebook-f"></i></a><a href="#" class="btn-like">Like</a></li>
<li class="color-2"><a href="#"><i class="fa fa-twitter"></i></a><a href="#" class="btn-like">Follow</a></li>
<li class="color-3"><a href="#"><i class="fa fa-rss"></i></a><a href="#" class="btn-like">Join</a></li>
<li class="color-4"><a href="#"><i class="fa fa-youtube"></i></a><a href="#" class="btn-like">Subscribe</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-7">
<div class="text-box">
<h2>Mark <span>Anderson</span></h2>
<span class="title">Article Writer</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dolor nisl, interdum ac enim consectetur, convallis facilisis metus. Nam ac bibendum nisl. Vivamus nec neque pharetra, blandit lorem et, feugiat sapien. Integer elementum imperdiet imperdiet. Phasellus iaculis nec sapien lobortis tempus. Vestibulum tellus lacus, condimentum ac arcu sit amet, suscipit ornare ex. In blandit sed augue eget tristique.</p>
<p>Quisque porttitor rhoncus orci quis tincidunt. Nunc fringilla, nisl id sollicitudin semper, velit dolor congue ex, non maximus est elit quis odio. Praesent molestie odio eu aliquet sagittis. Curabitur et tempor nibh.</p>
<p>Duis leo nibh, vulputate ut sagittis vel, dignissim ac augue. Donec tristique eu diam non tincidunt. Sed ac erat eget sem egestas finibus feugiat sit amet dui. </p>
<strong class="name">Mark Anderson</strong> </div>
</div>
</div>
</div>
<div class="cp-calender-row">
<h2>Post Calender</h2>
<div class="calender-box">
<div class="event-calender">
<div id='calendar'></div>
</div>
</div>
</div>
<div class="cp-popular-post">
    <h2>Popular Posts</h2>
    <div class="row">
    @foreach ($popular as $news)
        <div class="col-md-4">
            <div class="box">
                <div class="frame"><a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}"><img width="360px" height="200px" src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt="img"></a></div>
                <div class="text-box">
                    <h2><a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}">{{ $news->news_title }}</a></h2>
                    <a href="{{ asset($news->news_id . '/' . $news->news_slugtitle . '.html') }}" class="btn-continue">Continue Reading</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<div class="share-idea-row">
<div class="container">
<form action="#">
<strong class="title">Share Your Idea</strong>
<h2>Contact <span>With me</span></h2>
<div class="row">
<div class="col-md-6">
<input name="" type="text" placeholder="name" required>
</div>
<div class="col-md-6">
<input name="" type="text" placeholder="email" required>
</div>
<div class="col-md-12">
<textarea name="" cols="10" rows="10" placeholder="detail"></textarea>
</div>
<div class="col-md-12">
<input name="" type="submit" value="Submit">
</div>
</div>
</form>
</div>
</div>
<div class="cp-milestones">
<div class="container"> <strong class="title">My Milestones</strong>
<div class="row">
<div class="col-md-3">
<div class="box"> <strong class="number counter">2734</strong> <span>Active Articles</span> </div>
</div>
<div class="col-md-3">
<div class="box"> <strong class="number counter">77113</strong> <span>Likes</span> </div>
</div>
<div class="col-md-3">
<div class="box"> <strong class="number counter">256</strong> <span>Unique Members</span> </div>
</div>
<div class="col-md-3">
<div class="box"> <strong class="number counter">8</strong> <span>Years Of Existence</span> </div>
</div>
</div>
</div>
</div>
</section>
 
</div>
 
 
</div>
@endsection
