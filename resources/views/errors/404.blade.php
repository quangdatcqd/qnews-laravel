@extends('layouts.applayout')
@section('noidungchinh')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-question"></i> Không tìm thấy</h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li> 
                </ol>
            </div><!-- end col -->                    
        </div><!-- end row -->
    </div><!-- end container -->
</div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-wrapper">
                    <div class="notfound">   
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h2>404</h2>
                                <h3>Úi dời! Liên kết không tồn tại!</h3>
                                <p>Trang bạn tìm không có sẵn, vui lòng bấm nút trang chủ phí dưới để quay trở lại.</p>
                                <a href="#" class="btn btn-primary"> Về Trang chủ</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection