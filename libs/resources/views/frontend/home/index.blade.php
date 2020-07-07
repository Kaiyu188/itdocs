@extends('frontend.master.master')
@section('title', 'Home')
@section('main')
<!-- slaider -->
<section class="ot-section-b">
    <!-- container -->
    <div class="container">
        <!-- slaider -->
        <div class="slider">

            <div class="row row-slider-gutter">
                <div class="col-md-12 slider-item-large">
                    <figure>
                        <a href="{{ asset(urlencode(base64_encode($newsSolanxem1->news_id)) . '-' . $newsSolanxem1->news_slugtitle . '.html') }}"><img src="{{asset('libs/storage/app/avatar/'.$newsSolanxem1->news_img)}}" alt=""></a>
                        <figcaption>
                            <h2><a href="{{ asset(urlencode(base64_encode($newsSolanxem1->news_id)) . '-' . $newsSolanxem1->news_slugtitle . '.html') }}">{{ $newsSolanxem1->news_title }}</a></h2>
                            <div class="post-meta">
                                <span>27. april 2015</span> <span><i class="fa fa-eye"></i> {{ $newsSolanxem1->news_solanxem }}</span>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <!-- end slaider -->
    </div>
    <!-- end container -->
</section>
<section class="ot-section-b">
    <div class="container">
        <!-- latest posts section -->
        <h4 class="section-title">Bài viết thịnh hành</h4>
        <div class="row">
            @foreach ($newsFeature as $news)
            <div class="col-md-4 col-sm-4">
                <div class="grid-large" style="margin-bottom: 50px">
                    <div class="post-image">
                        <div class="post-title">
                            <div class="gl-text-hover">
                                <p>{{ $news->news_summary }}</p>
                                <div class="read-more">
                                    <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">Đọc tiếp</a>
                                </div>
                            </div>
                            <div class="gl-title-hover">
                                <div class="post-cat2"><span>Cinema</span></div>
                                <h2><a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">{{ $news->news_title }}</a></h2>
                            </div>
                        </div>
                        <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}"><img src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt=""></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- latest posts section -->
        <h4 class="section-title">Bài viết mới nhất</h4>
        <div class="row">
            @foreach ($newsNew as $news)
            <div class="col-md-4 col-sm-4">
                <div class="grid-large" style="margin-bottom: 50px">
                    <div class="post-image">
                        <div class="post-title">
                            <div class="gl-text-hover">
                                <p>{{ $news->news_summary }}</p>
                                <div class="read-more">
                                    <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">Đọc tiếp</a>
                                </div>
                            </div>
                            <div class="gl-title-hover">
                                <div class="post-cat2"><span>Cinema</span></div>
                                <h2><a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">{{ $news->news_title }}</a></h2>
                            </div>
                        </div>
                        <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}"><img src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt=""></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- container -->
</section>
<!-- main content -->
{{-- <section class="ot-section-a">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="theiaStickySidebar">
                    Quảng cáo
                    <div class="ot-module">
                        <div class="ot-advert">
                            <div class="ot-advert-title">advertisement <a href="contact.html">click here for rates</a></div>
                            <div class="ot-ad-728x90">
                                <a href="index-2.html"><img src="images/ad728x90.png" alt="ad728x90"></a>
                            </div>
                        </div>
                    </div>
                    Quảng cáo end
                    @foreach ($cateList as $cate)
                    <div class="ot-module">
                        <!-- classic grid posts section -->
                        <h4 class="section-title">{{ $cate->cate_name }}</h4>
                        <!-- Grid posts 1. row -->
                        <div class="row">
                            @foreach ($news_cate as $news)
                            @if ($news->news_cate == $cate->cate_id && $count < 4) <div class="col-md-6 col-sm-6">
                                <div class="grid-post grid-gutter">
                                    <div class="post-image">
                                        <div class="post-title">
                                            <div class="post-cat2">
                                                <span>{{ $cate->cate_name }}</span>
                                            </div>
                                            <h2><a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">{{ $news->news_title }}</a></h2>
                                        </div>
                                        <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}"><img src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt=""></a>
                                    </div>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <span>31. april 2015</span> <span>{{ $cate->cate_solanxem }} views</span>
                                        </div>
                                        <p>{{ $cate->cate_summary }}</p>
                                        <input type="hidden" value="{{ $count += 1 }}">
                                    </div>
                                    <div class="read-more">
                                        <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">Đọc tiếp</a>
                                    </div>
                                </div>
                        </div>
                        @endif

                        @endforeach
                    </div>
                </div>
                <input type="hidden" value="{{ $count = 0 }}">

                @endforeach
                <!-- end ot-module -->
            </div>
            <!-- stickysidebar -->
        </div>
        <!-- end main content .col-md-8 -->
    </div>
    <!-- row -->
    <!-- end main content -->

    <!-- container -->
</section> --}}
<!-- end ot-section-a -->
@endsection
