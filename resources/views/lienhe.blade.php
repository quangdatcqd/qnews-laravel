
@extends('layouts.applayout')

@section('noidungchinh')
    
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-envelope-o"></i> Liên hệ với chúng tôi</h2>
            </div><!-- end col -->
            {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active"><a href="#">Contact</a></li>
                </ol>
            </div><!-- end col -->                     --}}
        </div><!-- end row -->
    </div><!-- end container -->
</div>



<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Bạn cần chúng tôi giúp?</h4>
                            <p>Hãy gửi những vấn đề mà bạn đang gặp phải. Chúng tôi sẽ cố gắng hỗ trợ bạn sớm nhất.</p>
                        </div>

                        {{-- <div class="col-lg-6">
                            <h4>How we help?</h4>
                            <p>If you’d like to write for us, <a href="#">advertise with us</a> or just say hello, fill out the form below and we’ll get back to you as soon as possible.</p>
                        </div>

                        <div class="col-lg-12">
                            <blockquote class="blockquote">Please read <a href="#">Licensing &amp; Terms</a> of Use if you are wondering about the license. </blockquote>
                        </div> --}}
                    </div><!-- end row -->


                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-wrapper" method="POST" action="{{url('gui-lien-he')}}">
                                @csrf
                            <h4>Biểu mẫu</h4>
                          
                             <?php 
                                if (Session::has('thongbao'))
                                    {
                                        echo ' <div class="alert alert-success" role="alert">'.session('thongbao').'</div>';
                                    }
                            ?>
                           
                         
                                <input type="text" class="form-control" name="name" placeholder="Họ Tên">
                                <input type="text" class="form-control" name="email" placeholder="Địa chỉ Email">
                                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                                {{-- <input type="text" class="form-control" placeholder="Nội " --}}
                                <textarea class="form-control" name="message" placeholder="Nội dung yêu cầu"></textarea>
                                <button type="submit" class="btn btn-primary">Gửi <i class="fa fa-envelope-open-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    {{-- <div class="widget">
                        <h2 class="widget-title">Tìm kiếm</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm trong trang">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget --> --}}

                    {{-- <div class="widget">
                        <h2 class="widget-title">Bài viết gần đây</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget --> --}}

                    {{-- <div class="widget">
                        <h2 class="widget-title">Advertising</h2>
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget --> --}}

                    {{-- <div class="widget">
                        <h2 class="widget-title">Instagram Feed</h2>
                        <div class="instagram-wrapper clearfix">
                            <a class="" href="#"><img src="upload/insta_01.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_02.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_03.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_04.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_05.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_06.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_07.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_08.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="upload/insta_09.jpeg" alt="" class="img-fluid"></a>
                        </div><!-- end Instagram wrapper -->
                    </div><!-- end widget --> --}}

                    {{-- <div class="widget">
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
                    </div><!-- end widget --> --}}

                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="banner-spot clearfix">
            <div class="banner-img">
                <img src="upload/banner/banner2.jpg" alt="" class="img-fluid">
            </div><!-- end banner-img -->
        </div><!-- end banner -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection