@extends('layouts.applayout')
@section('noidungchinh')

    <section>
        <div class="container baocao">

            <h2 class="text-center">BÁO CÁO ASM 1</h2>
            <h3 class="text-center text-success">CHU QUANG ĐẠT - PS13143</h3>

            <div  class="container mx-5">
                <h5>* Các trang:</h5>

                <ul class="chucnang-ul">
                    <li>Layout</li>
                    <li>Trang chủ</li>
                    <li>Chi tiết tin</li>                    
                    <li>Tin trong loại</li>
                    <li>Liên hệ</li> 
                </ul>
                <h5>* Layout:</h5>
                <ul class="chucnang-ul">
                    <li>Menu có 2 cấp: thể loại và loại tin</li>
                    <li>Header: có logo</li>
                    <li>Footer: có thông tin cá nhân</li>
                </ul>
                <h5>* Trang chủ:</h5>
                <ul class="chucnang-ul">
                    <li>Hiện tin nổi bật</li>
                    <li>Tin mới nhất</li>
                    <li>Tin mới theo loại và thể loại</li> 
                </ul>
                <h5>* Trang chi tiêt tin:</h5>
                <ul class="chucnang-ul">
                    <li>Hiện tin liên quan</li>
                    <li>Hiện ý kiến và thêm ý kiến</li>
                    <li>Có nút like share facebook</li>
                </ul>
                <h5>* Trang tìm kiếm:</h5>
                <ul class="chucnang-ul">
                    <li>Tìm kiếm tin theo tên</li>
                </ul>

                
            </div>
        </div>

    </section>

@endsection