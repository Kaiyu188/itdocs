<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            {{-- <li class=" @if($active == 'HOME') active @endif"> --}}
                <li>
                <a href="{{ asset('/admin/home') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Trang chủ</span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Quản lý tin tức</div>
        <ul class="pcoded-item pcoded-left-item">
            {{-- <li class=" @if($active == 'CATEGORY') active @endif"> --}}
                <li>
                <a href="{{ asset('/admin/category') }}">
                    <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                    <span class="pcoded-mtext">Danh mục</span>
                </a>
            </li>
            {{-- <li class=" @if($active == 'SUB_CATEGORY') active @endif"> --}}
                <li>
                <a href="{{ asset('/admin/sub_category') }}">
                    <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                    <span class="pcoded-mtext">Danh mục con</span>
                </a>
            </li>
            {{-- <li class=" @if($active == 'POST') active @endif"> --}}
                <li>
                <a href="{{ asset('/admin/post') }}">
                    <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                    <span class="pcoded-mtext">Bài viết</span>
                </a>
            </li> 
        </ul>
    </div>
</nav>
