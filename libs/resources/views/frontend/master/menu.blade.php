<nav class="main-menu">
    <div class="container">
        <label for="show-menu" class="show-menu"><i class="fa fa-bars"></i></label>
        <input type="checkbox" id="show-menu">
        <ul class="menu" id="main-mobile-menu">
            <li>
                <a href="{{ asset('/') }}"><i class="fa fa-home"></i> Trang chủ</a><span class="sub_menu_toggle"></span>
            </li>
            @foreach ($cate_list as $cate)
            <li><a href="{{ asset('TheLoai-' . urlencode(base64_encode($cate->cate_id)) . '-' . $cate->cate_slug) }}">{{$cate->cate_name}}</a>
                <ul class="sub-menu">
                    @foreach ($type_list as $type)
                    @if ($type->type_cate == $cate->cate_id)
                    <li><a href="{{ asset(urlencode(base64_encode($cate->cate_id)) . '/DanhMuc-' . urlencode(base64_encode($type->type_id)) . '-' . $type->type_slug) }}">{{ $type->type_name  }}</a></li>
                    @endif
                    @endforeach
                </ul>
            </li>
            @endforeach
            <li><a href="{{ asset('about') }}">About</a></li>
            {{--  <li class="search-menu">
                <a href="#"><i class="fa fa-search"></i></a><span class="sub_menu_toggle"></span>
                <ul class="sub-menu">
                    <li>
                        <form id="search" class="navbar-form search" action="http://orange-themes.com/testiem">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Type to search" name="s" id="s">
                                <span class="input-group-btn"><button type="submit" class="btn btn-default btn-submit"><i class="fa fa-angle-right"></i></button></span>
                            </div>
                        </form>
                    </li>
                </ul>
            </li>  --}}
        </ul>
    </div>
</nav>
