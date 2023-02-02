<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse simplebar-scrollable-y"
    data-simplebar="init">
    <div class="simplebar-wrapper" style="margin: 0px;">
        <div class="simplebar-height-auto-observer-wrapper">
            <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask  ">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                    <div class="simplebar-content" style="padding: 0px;">
                        <div class="sidebar-inner px-4 pt-3">
                            <div class="pb-3 h3 logoqn text-center">Q-News</div>
                            <ul class="nav flex-column">
                                <li class="nav-item    ">
                                    <a href="{{ url('/quan-tri') }}" class="nav-link">
                                        <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                                        <span>Tổng Quan</span>
                                    </a>
                                </li>
                                <li class="nav-item li-hover">
                                    <span class="nav-link d-flex justify-content-between align-items-center ">
                                        <span>
                                            <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                            Quản Lý Bài Viết
                                        </span>
                                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                                    </span>
                                    <div class="multi-level  div-show " role="list" id="submenu-pages"
                                        aria-expanded="false" style="">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/bai-viet') }}"><span>Bài Viết</span></a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/them-bai-viet') }}"><span>Thêm Bài
                                                        Viết</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item li-hover">
                                    <span class="nav-link d-flex justify-content-between align-items-center"
                                        data-toggle="collapse" data-target="#submenu-pages" aria-expanded="true">
                                        <span>
                                            <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                            Quản Lý Loại Tin
                                        </span>
                                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                                    </span>
                                    <div class="multi-level   div-show " role="list" id="submenu-pages"
                                        aria-expanded="false" style="">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/loai-tin') }}"><span>Loại Tin</span></a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/them-loai-tin') }}"><span>Thêm Loại
                                                        Tin</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item li-hover">
                                    <span class="nav-link d-flex justify-content-between align-items-center"
                                        data-toggle="collapse" data-target="#submenu-pages" aria-expanded="true">
                                        <span>
                                            <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                            Quản Lý Thể Loại
                                        </span>
                                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                                    </span>
                                    <div class="multi-level div-show " role="list" id="submenu-pages"
                                        aria-expanded="false" style="">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/the-loai') }}"><span>Thể Loại</span></a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/them-the-loai') }}"><span>Thêm Thể
                                                        Loại</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item li-hover">
                                    <span class="nav-link d-flex justify-content-between align-items-center"
                                        data-toggle="collapse" data-target="#submenu-pages" aria-expanded="true">
                                        <span>
                                            <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                            Quản Lý Users
                                        </span>
                                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                                    </span>
                                    <div class="multi-level div-show " role="list" id="submenu-pages"
                                        aria-expanded="false" style="">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/user') }}"><span>Users</span></a></li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/them-user') }}"><span>Thêm Users</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item li-hover">
                                    <span class="nav-link d-flex justify-content-between align-items-center"
                                        data-toggle="collapse" data-target="#submenu-pages" aria-expanded="true">
                                        <span>
                                            <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
                                            Quản Lý Bình Luận
                                        </span>
                                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                                    </span>
                                    <div class="multi-level div-show " role="list" id="submenu-pages"
                                        aria-expanded="false" style="">
                                        <ul class="flex-column nav">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/binh-luan') }}"><span>Bình Luận</span></a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('/quan-tri/them-binh-luan') }}"><span>Thêm Bình
                                                        Luận</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="simplebar-placeholder" style="width: 260px; height: 525px;"></div>
    </div>
    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
    </div>
    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
        <div class="simplebar-scrollbar"
            style="height: 228px; display: block; transform: translate3d(0px, 0px, 0px);">
        </div>
    </div>
</nav>
