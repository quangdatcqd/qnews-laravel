<?php
use App\Http\Controllers\TinController;
$tinmoi = DB::table('tin')
    ->select('TieuDe', 'idTin','tin.idLT','slugLT','Ten','slug', 'Ngay', 'urlHinh')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien', '1')
    ->where('tin.lang', 'vi')
    ->orderby('Ngay', 'desc')
    ->offset(0)
    ->limit(4)
    ->get();

?>


<div class="row tinmoi">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-title">
            <h3 class="color-pink"><a title="">TIN MỚI NHẤT</a></h3>
        </div><!-- end title -->
        <div class="row">

            @foreach ($tinmoi as $row)

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="{{ url("/chi-tiet-tin/".$row->slug)  }}" title="">
                                <img src="{{ $row->urlHinh }}" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="{{url("/chi-tiet-tin/".$row->slug)  }}" title="">{{ $row->TieuDe }}</a></h4>
                            <small><a href="{{ action([TinController::class,'tinTrongLoai'], ['id'=>$row->slugLT]) }}" title="">{{ $row->Ten }}</a></small>
                            <small><a   title="">{{ date('H:m ', strtotime($row->Ngay)) }}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div>
            @endforeach

        </div><!-- end row -->
    </div><!-- end col -->
</div><!-- end row -->


<hr class="invis1">

<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="banner-spot clearfix">
            <div class="banner-img">
                <img src="upload/banner/banner1.png" onerror="this.src='upload/default.jpg'"  class="img-fluid">
            </div><!-- end banner-img -->
        </div><!-- end banner -->
    </div><!-- end col -->
</div><!-- end row -->

<hr class="invis1">
