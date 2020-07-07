@extends('frontend.master.master')
@section('title', 'Thể loại')
@section('main')
<!-- slaider -->
<!-- main content -->
<section class="ot-section-a">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="theiaStickySidebar">
                    <div class="ot-module">
                        <!-- classic grid posts section -->
                        <h4 class="section-title">{{ $type_Name->type_name }}</h4>
                        <!-- Grid posts 1. row -->

                        <div class="row">
                            @foreach ($newsList as $news)
                            <div class="col-md-6 col-sm-6">
                                <div class="grid-post grid-gutter">
                                    <div class="post-image">
                                        <div class="post-title">
                                            <div class="post-cat2"><span>{{ $type_Name->type_name }}</span></div>
                                            <h2><a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">{{ $news->news_title }}</a></h2>
                                        </div>
                                        <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}"><img src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt=""></a>
                                    </div>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <span>27. april 2015</span> <span>{{ $news->news_solanxem }} views</span>
                                        </div>
                                        <p>{{ $news->news_summary }}</p>
                                    </div>
                                    <div class="read-more"><a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">Đọc tiếp</a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $newsList->links() }}
                    {{--  <div class="ot-module">
                        <div class="ot-advert">
                            <div class="ot-advert-title">advertisement <a href="contact.html">click here for rates</a></div>
                            <div class="ot-ad-728x90">
                                <a href="index-2.html"><img src="images/ad728x90.png" alt="ad728x90"></a>
                            </div>
                        </div>
                    </div>  --}}
                    <!-- end ot-module -->
                </div>
                <!-- stickysidebar -->
            </div>
            <!-- end main content .col-md-8 -->

        </div>
        <!-- row -->
        <!-- end main content -->
    </div>
    <!-- container -->
</section>
<!-- end ot-section-a -->
<!-- featured articles -->
<section class="ot-section-b">
    <div class="container">
        <div class="ot-module">
            <h4 class="section-title">Xem nhiều nhất</h4>
            <div class="row">
                @foreach ($newsSolanxem4 as $news)
                <div class="col-md-3	col-sm-3">
                    <!-- featured article item -->
                    <div class="ot-featured-articles">
                        <div class="ot-featured-image">
                            <div class="ot-featured-title">
                                <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">
                                    <h2>{{ $news->news_title }}</h2>
                                </a>
                            </div>
                            <a href="{{ asset(urlencode(base64_encode($news->news_id)) . '-' . $news->news_slugtitle . '.html') }}">
                                <p class="vignette"><img src="{{asset('libs/storage/app/avatar/'.$news->news_img)}}" alt="" /></p>
                            </a>
                        </div>
                    </div>
                    <!-- featured article item -->
                </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end ot-module -->
    </div>
</section>
<!-- end featured articles -->
@endsection
