    <div class="collapse navbar-collapse" id="navbar">
        <nav>
            <ul id="nav" class="nav navbar-nav">
                <li><a href="{{asset('/')}}">HOME</a></li>
                @foreach ($cate_list as $cate)
                <li><a href="{{ asset('TheLoai/' . $cate->cate_id . '/' . $cate->cate_slug) }}">{{$cate->cate_name}}</a>
                    <ul>
                        @foreach ($type_list as $type)
                            @if ($type->type_cate == $cate->cate_id)
                                <li><a href="{{ asset($cate->cate_id . '/' . $type->type_id . '/TheLoai/' . $cate->cate_slug . '/DanhMuc/' . $type->type_slug) }}">{{ $type->type_name  }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                @endforeach
                <li><a href="{{asset('/about')}}">About</a></li>
            </ul>
        </nav>
    </div>

    