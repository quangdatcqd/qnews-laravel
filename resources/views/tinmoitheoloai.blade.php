
<?php
use App\Http\Controllers\TinController;
      $LT = DB::table('loaitin')
                ->select('idLT','Ten','slugLT')
                ->where('AnHien','1')
                ->orderby('ThuTu','asc')
                ->offset(0)
                ->limit(2)
                ->get();
    
    

?>


<div class="col-lg-3">
@foreach ( $LT as $LT )
    


        
<?php 
  
$tinmoiLT = DB::table('tin')
  ->select('TieuDe','idTin','slug',  'tin.idLT', 'Ten','Ngay','urlHinh') 
  ->join('loaitin','tin.idLT','=','loaitin.idLT')
  ->where('tin.AnHien', '1')
  ->where('tin.lang', 'vi')
  ->where('tin.idLT',$LT->idLT)
  ->orderby('Ngay', 'desc')
  ->offset(0)
  ->limit(3)
  ->get();
  $tacgia = 'Quang Đạt';

?>


    <div class="section-title">
        <h3 class="color-yellow"><a href="{{ action([TinController::class,'tinTrongLoai'], ['id'=>$LT->slugLT]) }}" title="">{{$LT->Ten}}</a></h3>
    </div><!-- end title -->

    @foreach ($tinmoiLT as $row)
    <div class="blog-box tinmoilt">
        <div class="post-media">
            <a href="{{ url("/chi-tiet-tin/".$row->slug)  }}" title="">
                <img src="{{$row->urlHinh}}" onerror="this.src='upload/default.jpg'"   class="img-fluid">
                <div class="hovereffect">
                    <span class=""></span>
                </div><!-- end hover -->
            </a>
        </div><!-- end media -->
        <div class="blog-meta">
            <h5><a href="{{url("/chi-tiet-tin/".$row->slug)  }}" title="">{{$row->TieuDe}}</a></h5>
            {{-- <small><a href="blog-category-01.html" title="">Videos</a></small> --}}
            <small><a   title="">Ngày đăng: {{date('d/m/Y',strtotime($row->Ngay))}}</a></small>
            <small><a href="#" title="">{{$tacgia}}</a></small>
        </div><!-- end meta -->
    </div><!-- end blog-box -->
    <hr class="invis"> 
    @endforeach
 

    
    @endforeach
</div><!-- end col -->


</div><!-- end row -->


<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="banner-spot clearfix">
            <div class="banner-img">
                <img src="upload/banner/banner2.jpg" alt="" class="img-fluid">
            </div><!-- end banner-img -->
        </div><!-- end banner -->
    </div><!-- end col -->
</div><!-- end row -->

 






 