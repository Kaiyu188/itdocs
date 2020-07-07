@extends('frontend.master.master')
@section('title', 'Bài viết')
@section('main')
<!-- main content -->
<section class="ot-section-a">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="theiaStickySidebar">
                    <div class="content ot-article">
                        <div class="article-image">
                            <img src="{{asset('libs/storage/app/avatar/'.$news_Item->news_img)}}" alt="">
                        </div>
                        <h2>{{ $news_Item->news_title }}</h2>
                        <div class="post-meta">
                            <span>1. jule 2015</span> <span>54 views</span>
                        </div>
                        <p>
                            {!! $news_Item->news_content !!}
                        </p>
                    </div>
                    <div class="ot-article-tags"><span><i class="fa fa-tags"></i></span><a href="{{ asset('TheLoai-' . urlencode(base64_encode($news_Item->cate_id)) . '-' . $news_Item->cate_slug) }}">{{ $news_Item->cate_name }}</a> <a href="{{ asset(urlencode(base64_encode($news_Item->cate_id)) . '/DanhMuc-' . urlencode(base64_encode($news_Item->type_id)) . '-' . $news_Item->type_slug) }}">{{ $news_Item->type_name }}</a></div>
                    
                    <div class="ot-author">
                        <div class="author-image">
                            <img src="images/demo/720x720-2.jpg" alt="">
                        </div>
                        <div class="author-text-body">
                            <h3><a href="index-list.html">{{ $news_Item->name }}</a> </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium. Adipisci accusamus accusantium. Adipisci accusamus accusantium.</p>
                            <div class="author-social">
                                <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                                <a href="http://plus.google.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="http://tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- related articles -->
                    <div class="ot-module ot-related-articles">
                        <h4 class="section-title">Bài viết liên quan</h4>
                        <div class="row">
                        @foreach ($news_cungtheloai as $news)
                        @if ($news->news_type == $news_Item->news_type && $count < 8)
                            <div class="col-md-3  col-sm-6 col-xs-6">
                                <div class="ot-related-image">
                                    <img src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt="" />
                                </div>
                                <h3><a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">{{ $news->news_title }}</a></h3>
                                <input type="hidden" value="{{ $count += 1 }}">
                            </div>
                        @endif
                        @endforeach
                            
                        </div>
                    </div>
                    <!-- end: related articles -->
                </div>
                <!-- end theiaStickySidebar -->
            </div>
            @include('frontend.master.rightbar')
        </div>
        <!-- row -->
        <!-- end main content -->
    </div>
    <!-- container -->
</section>
<!-- end ot-section-a -->
@endsection
