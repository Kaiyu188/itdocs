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
