<?php
use App\Http\Controllers\TinController;
$menulist = DB::table('theloai')
    ->where('lang', 'vi')
    ->where('AnHien', '1')
    ->orderby('ThuTu', 'desc')
    ->limit(10)
    ->get();

?>


<nav class="navbar navbar-inverse navbar-toggleable-md">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu"
        aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link color-pink-hover" href="#">Trang chủ</a>
            </li>
            @foreach ($menulist as $row)
                {{-- <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể loại</a>
                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                    <li>
                        <div class="mega-menu-content clearfix">
                            <div class="tab">
                                <button class="tablinks active" onclick="openCategory(event, 'cat01')">Beauty</button>
                                <button class="tablinks" onclick="openCategory(event, 'cat02')">Fashion</button>
                                <button class="tablinks" onclick="openCategory(event, 'cat03')">Travel</button>
                                <button class="tablinks" onclick="openCategory(event, 'cat04')">Architecture</button>
                                <button class="tablinks" onclick="openCategory(event, 'cat05')">Recipes</button>
                            </div>

                            <div class="tab-details clearfix">
                                <div id="cat01" class="tabcontent active">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_01.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Spa</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Top 10+ care advice for your toenails</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_02.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Beauty</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">The secret of your beauty is handmade soap</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_03.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Beauty</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Benefits of face mask made from mud</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_04.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Spa</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Relax with the unique warmth of candle flavor</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>
                                    </div><!-- end row -->
                                </div>
                                <div id="cat02" class="tabcontent">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_05.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Fashion</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">2017 summer stamp will have design models here</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_06.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Collections</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Which color is the most suitable color for you?</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_07.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Fashion</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Subscribe to these sites to keep an eye on the fashion</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_08.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Trends</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">The most trends of this year with color combination</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>
                                    </div><!-- end row -->
                                </div>
                                <div id="cat03" class="tabcontent">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_09.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Tourism</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">I visited the architects of Istanbul for you</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_11.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Travel</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Prepared handmade dish dish in the Netherlands</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_12.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">City Tours</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">I recommend you visit the fairy chimneys</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_13.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Tourism</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">One of the most beautiful ports in the world</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>
                                    </div><!-- end row -->
                                </div>
                                <div id="cat04" class="tabcontent">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_14.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Places</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">A collection of the most beautiful shop designs</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_15.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Designs</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">America's and Canada's most beautiful wine houses</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_16.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Minimalism</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">The most professional ways to color your walls</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_17.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Furnishings</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Stylish cabinet designs and furnitures</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>
                                    </div><!-- end row -->
                                </div>
                                <div id="cat05" class="tabcontent">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_18.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Vegetables</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Grilled vegetable with fish prepared with fish</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_19.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Restaurants</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">The world's finest and clean meat restaurants</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_20.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Meat foods</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Fried veal and vegetable dish</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                            <div class="blog-box">
                                                <div class="post-media">
                                                    <a href="single.html" title="">
                                                        <img src="upload/menu_21.jpg" alt="" class="img-fluid">
                                                        <div class="hovereffect">
                                                        </div><!-- end hover -->
                                                        <span class="menucat">Pastas</span>
                                                    </a>
                                                </div><!-- end media -->
                                                <div class="blog-meta">
                                                    <h4><a href="single.html" title="">Tasty pasta sauces and recipes</a></h4>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                        </div>
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end tab-details -->
                        </div><!-- end mega-menu-content -->
                    </li>
                </ul>
            </li> --}}
                <li class="nav-item dropdown has-submenu">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">{{ $row->TenTL }}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        {{-- <li><a class="dropdown-item" href="single.html">Single Blog <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="single.html">Single Default</a></li>
                            <li><a class="dropdown-item" href="single-fullwidth.html">Single Fullwidth</a></li>
                            <li><a class="dropdown-item" href="single-slider.html">Single Gallery</a></li>
                            <li><a class="dropdown-item" href="single-video.html">Single Video</a></li>
                            <li><a class="dropdown-item" href="single-audio.html">Single Audio</a></li>
                            <li><a class="dropdown-item" href="single-no-media.html">Single No Media</a></li>
                        </ul>
                    </li> --}}

                        <?php
                        $menucon = DB::table('loaitin')
                            ->where('lang', 'vi')
                            ->where('AnHien', '1')
                            ->where('idTL', $row->idTL)
                            ->orderby('ThuTu', 'desc')
                            ->limit(10)
                            ->get();
                        
                        ?>

                        @foreach ($menucon as $menucon)
                            <li><a class="dropdown-item"
                                    href="{{ action([TinController::class, 'tinTrongLoai'], ['id' => $menucon->slugLT]) }}">
                                    {{ $menucon->Ten }}</a></li>
                        @endforeach


                    </ul>
                </li>
            @endforeach

            <li class="nav-item">
                <a class="nav-link color-pink-hover" href="{{ url('lien-he') }}">Liên hệ</a>
            </li>

        </ul>
    </div>
</nav>
