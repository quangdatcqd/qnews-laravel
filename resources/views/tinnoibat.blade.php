@section('tinnoibat')
<?php  
use App\Http\Controllers\TinController;
   $tinnoibat = DB::table('tin')
                ->select("idTin","TieuDe","Ngay",'slugLT', "tin.idLT","Ten",'slug',"urlHinh")
                ->orderby("Ngay","desc")
                ->join("loaitin","tin.idLT", "=","loaitin.idLT")
                ->where("tin.AnHien","=","1")
                ->where("NoiBat","=","1")
                ->offset(0)
                ->limit(5)
                ->get();
$tacgia = "Quang Đạt";

?>

 
<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            <div class="left-side">
                <div class="masonry-box post-media">
                     <img src="{{$tinnoibat[0]->urlHinh}}" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-aqua"><a href="{{ action([TinController::class,'tinTrongLoai'], ['id'=>$tinnoibat[0]->slugLT]) }}" title="">{{$tinnoibat[0]->Ten}}</a></span>
                                <h4><a href=" {{ url("/chi-tiet-tin/".$tinnoibat[0]->slug) }}" title="">{{$tinnoibat[0]->TieuDe}}</a></h4>
                                <small><a href="#" title="">{{ date('d/m/Y',strtotime($tinnoibat[0]->Ngay)) }}</a></small>
                                <small><a href="#" title="">{{$tacgia}}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end left-side -->

            <div class="center-side">
                <div class="masonry-box post-media">
                     <img src="{{$tinnoibat[1]->urlHinh}}" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{ action([TinController::class,'tinTrongLoai'], ['id'=>$tinnoibat[1]->slugLT]) }}" title="">{{$tinnoibat[1]->Ten}}</a></span>
                                <h4><a href="{{ url("/chi-tiet-tin/".$tinnoibat[1]->slug)  }}" title="">{{$tinnoibat[1]->TieuDe}}</a></h4>
                                <small><a href="single.html" title="">{{ date('d/m/Y',strtotime($tinnoibat[1]->Ngay)) }}</a></small>
                                <small><a href="blog-author.html" title="">{{$tacgia}}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                     <img src="{{$tinnoibat[2]->urlHinh}}" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{ action([TinController::class,'tinTrongLoai'], ['id'=>$tinnoibat[2]->slugLT]) }}" title="">{{$tinnoibat[2]->Ten}}</a></span>
                                <h4><a href="{{ url("/chi-tiet-tin/".$tinnoibat[2]->slug)  }}" title="">{{$tinnoibat[2]->TieuDe}}</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                     <img src="{{$tinnoibat[3]->urlHinh}}" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{ action([TinController::class,'tinTrongLoai'], ['id'=>$tinnoibat[3]->slugLT]) }}" title="">{{$tinnoibat[3]->Ten}}</a></span>
                                <h4><a href="{{ url("/chi-tiet-tin/".$tinnoibat[3]->slug)  }}" title="">{{$tinnoibat[3]->TieuDe}}</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end left-side -->

            <div class="right-side hidden-md-down">
                <div class="masonry-box post-media">
                     <img src="{{$tinnoibat[4]->urlHinh}}" onerror="this.src='upload/default.jpg'"  class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-aqua"><a href="{{ action([TinController::class,'tinTrongLoai'], ['id'=>$tinnoibat[4]->slugLT]) }}" title="">{{$tinnoibat[4]->Ten}}</a></span>
                                <h4><a href="{{ url("/chi-tiet-tin/".$tinnoibat[4]->slug)  }}" title="">{{$tinnoibat[4]->TieuDe}}</a></h4>
                                <small><a   title="">{{ date('d/m/Y',strtotime($tinnoibat[4]->Ngay)) }}</a></small>
                                <small><a href="#" title="">{{$tacgia}}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                     </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end right-side -->
        </div><!-- end masonry -->
    </div>
</section>


@endsection