@extends('layouts.applayout')

@section('noidungchinh')
    <?php
    use App\Http\Controllers\TinController;
    
    ?>
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrapper">
                <div class="blog-title-area">
                    <ol class="breadcrumb hidden-xs-down mb-3">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a>{{ $tin->TenTL }}</a></li>
                        <li class="breadcrumb-item active"><a
                            href="{{ action([TinController::class, 'tinTrongLoai'], ['id' => $tin->slugLT]) }}"
                            title="">{{ $tin->Ten }}</a></li>
                        <li class="breadcrumb-item active">{{ $tin->TieuDe }}</li>
                    </ol>

                    

                    <h1>{{ $tin->TieuDe }}</h1>

                    <div class="blog-meta big-meta">
                        <small><a title="">Ngày đăng: {{ date('H:m d/m/Y', strtotime($tin->Ngay)) }}</a></small>
                        <small><a href="#" title="">Quang Đạt</a></small>
                        <small><a href="#" title=""><i class="fa fa-eye"></i> {{ $tin->SoLanXem }}</a></small>
                        <small><a href="#" title=""><i class="fa fa-comment-o"></i> {{ count($ykien) }}</a></small>
                    </div><!-- end meta -->

                    <div class="post-sharing">
                        <ul class="list-inline">

                          
                            {{-- <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span
                                        class="down-mobile">Chia sẻ lên Facebook</span></a></li> --}}
                             <li>
                                <iframe src="https://www.facebook.com/plugins/like.php?href=<?=urlencode( url()->current()) ?>&width=450&layout=standard&action=like&size=large&share=true&height=35&appId=2844297145651373" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>             </li>
                        </ul>
                    </div><!-- end post-sharing -->
                </div><!-- end title -->

                {{-- <div class="single-post-media">
                        <img src="upload/menu_08.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                    </div><!-- end media --> --}}

                <div class="blog-content">
                    <div class="pp">
                        <h2><?= $tin->TomTat ?></h2>
                    </div><!-- end pp -->

                    <div class="noidungtin">
                        <?= $tin->Content ?>
                    </div>

                </div><!-- end content -->

                <div class="blog-title-area">
                    <div class="tag-cloud-single">
                        <span>Thẻ</span>
                        @foreach ($tags as $tag)
                            <small><a href="#" title="">{{ $tag }}</a></small>
                        @endforeach

                    </div><!-- end meta -->

                    <div class="post-sharing">
                        <ul class="list-inline">

                          
                            {{-- <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span
                                        class="down-mobile">Chia sẻ lên Facebook</span></a></li> --}}
                             <li>
                                <iframe src="https://www.facebook.com/plugins/like.php?href= <?=urlencode(url()->current())?>&width=450&layout=standard&action=like&size=large&share=true&height=35&appId=2844297145651373" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>             </li>
                        </ul>
                    </div><!-- end post-sharing -->
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/banner/banner2.jpg" onerror="this.src='upload/default.jpg'"
                                    class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                {{-- <div class="custombox prevnextpost clearfix">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between text-right">
                                                <img src="upload/blog_square_02.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid float-right">
                                                <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                <small>Prev Post</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col --> --}}

                {{-- <div class="col-lg-6">
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/blog_square_03.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction to the glorious world of history</h5>
                                                <small>Next Post</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->  
                        </div><!-- end row -->
                    </div><!-- end author-box --> --}}

                {{-- <hr class="invis1"> --}}

                {{-- <div class="custombox authorbox clearfix">
                        <h4 class="small-title">About author</h4>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <img src="upload/author.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid rounded-circle"> 
                            </div><!-- end col -->

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <h4><a href="#">Jessica</a></h4>
                                <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Cloapedia!</p>

                                <div class="topsocial">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Website"><i class="fa fa-link"></i></a>
                                </div><!-- end social -->

                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end author-box --> --}}

                {{-- <hr class="invis1"> --}}

                <div class="custombox clearfix">
                    <h4 class="small-title">Tin liên quan</h4>
                    <div class="row">
                        @foreach ($tinLQ as $tinlq)


                            <div class="col-lg-4">
                                <div class="blog-box tinlq">
                                    <div class="post-media">
                                        <a href="{{ url("/chi-tiet-tin/".$tinlq->slug)  }}" title="">
                                            <img src="{{ $tinlq->urlHinh }}" onerror="this.src='upload/default.jpg'"
                                                class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta title-tinlq">
                                        <h5><a href="{{ url("/chi-tiet-tin/".$tinlq->slug)  }}"
                                                title="">{{ $tinlq->TieuDe }}</a></h5>
                                        <small><a title="">{{ $tin->TenTL }}</a></small>
                                        <small><a title="">{{ date('d/m/Y', strtotime($tinlq->Ngay)) }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        @endforeach

                    </div><!-- end row -->
                </div><!-- end custom-box -->

                <hr class="invis1">

                <div class="custombox clearfix">
                    <h4 class="small-title"><i class="fa fa-comment-o"></i> Bình Luận : {{ count($ykien) }} </h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="comments-list">
                                @if (count($ykien) == 0)
                                    <h4>Hãy là người đầu tiên bình lận bài viết...</h4>
                                @else

                                    @foreach ($ykien as $ykien)
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img src="upload/ad" onerror="this.src='upload/default.jpg'"
                                                    class="rounded-circle">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading user_name">{{ $ykien->HoTen }} <small> <i
                                                            class="fa fa-clock-o"></i>
                                                        {{ date('d/m/Y - H:i:s', strtotime($ykien->created_at)) }} </small>
                                                </h4>
                                                <p>{{ $ykien->NoiDung }}</p>
                                                {{-- <a href="#" class="btn btn-primary btn-sm">Trả lời</a> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div><!-- end col -->

                    </div><!-- end row -->

                </div><!-- end custom-box -->

                <hr class="invis1">

                <div class="custombox clearfix">
                    <h4 class="small-title">Viết bình luận</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-wrapper" method="post" action="{{ route('binhluan.store') }}">
                                @csrf
                                <input type="text" class="form-control" name="hoTen" placeholder="Họ Tên">
                                <input type="text" class="form-control" name="Email" placeholder="Địa chỉ Email">
                                <input type="hidden" value="{{ $tin->idTin }}" name="idTin">
                                <textarea class="form-control" name="NoiDung" placeholder="Nhập nội dung"></textarea>
                                <button type="submit" name="comment" class="btn btn-primary">Bình Luận</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end page-wrapper -->
        </div><!-- end col -->

        {{-- <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Search</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search on the site">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Recent Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_01.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid float-left">
                                        <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_02.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid float-left">
                                        <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="upload/blog_square_03.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid float-left">
                                        <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Advertising</h2>
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/banner_03.jpg" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Instagram Feed</h2>
                        <div class="instagram-wrapper clearfix">
                            <a class="" href="#"><img src="upload/insta_01.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_02.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_03.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_04.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_05.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_06.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_07.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_08.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_09.jpeg" onerror="this.src='upload/default.jpg'"  class="img-fluid"></a>
                        </div><!-- end Instagram wrapper -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Popular Categories</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="#">Fahsion <span>(21)</span></a></li>
                                <li><a href="#">Lifestyle <span>(15)</span></a></li>
                                <li><a href="#">Art &amp; Design <span>(31)</span></a></li>
                                <li><a href="#">Health Beauty <span>(22)</span></a></li>
                                <li><a href="#">Clothing <span>(66)</span></a></li>
                                <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                <li><a href="#">Food &amp; Drink <span>(87)</span></a></li>
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->

                </div><!-- end sidebar -->
            </div><!-- end col --> --}}
    </div><!-- end row -->

@endsection
