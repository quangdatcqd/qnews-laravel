@extends("layouts.applayout")

@section('noidungchinh')
    <?php  
    
    use App\Http\Controllers\TinController;
    ?>

<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2>{{count($tinTL)}} kết quả với từ khoá "{{$word}}"<small class="hidden-xs-down hidden-sm-down"></small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a>Tìm kiếm</a></li>
                 </ol>
            </div><!-- end col -->                    
        </div><!-- end row -->
    </div><!-- end container -->
</div>


<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-list clearfix">
                         @foreach ($tinTL as $row)
<?php  


 $ykien = DB::table('ykien')
        ->where("idTin","=",$row->idTin)
        ->where("AnHien","=",'1')
        ->get();

?>

                         <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media tintl">
                                    <a href="{{ url("/chi-tiet-tin/".$row->slug)  }}" title="">
                                        <img src="{{$row->urlHinh}}" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="{{ url("/chi-tiet-tin/".$row->slug)  }}" title="">{{$row->TieuDe}}</a></h4>
                                <p>{{$row->TomTat}}</p> 
                                <small><a  title="">{{date('d/m/Y',strtotime($row->Ngay))}}</a></small>
                                <small><a  title=""><i class="fa fa-eye"> </i> {{$row->SoLanXem}}</a></small>

                                <small><a  title=""><i class="fa fa-comment-o"></i> {{count($ykien)}}</a></small>
                                <small><a  title="">Quang Đạt</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">
                         @endforeach
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        {{-- <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> --}}
 
                    </div><!-- end col -->
                </div><!-- end row -->
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
    </div><!-- end container -->
</section>
@endsection


