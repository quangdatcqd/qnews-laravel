@extends('admin.adminlayout')
@section('main')
<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Bài Viết</a></li> 
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h4 class="font-weight-bold">Danh Sách Bài Viết</h4>
             
        </div> 
    </div>
</div>
<div class="card border-light shadow-sm mb-4">
    <div class="card-body">
         
       <div class="table-responsive">
                <table class="table table-centered table-hover mb-0 rounded">
                    <thead class="thead-light ">
                        <tr >
                             
                            <th class="border-0" style="width: 25px">id</th>
                            <th class="border-0" style="width: 200px">Tiêu Đề</th>
                            <th class="border-0" style="width: 200px">Tóm Tắt</th>
                            <th class="border-0" style="width: 100px; ">Ảnh</th>
                            <th class="border-0" style="width: 150px">Thông tin</th>
                            {{-- <th class="border-0" style="width: 300px">Nội dung</th>  --}}
                            {{-- <th class="border-0" style="width: 50px">Loại tin</th>
                            <th class="border-0" style="width: 50px">Nổi bật</th>
                            <th class="border-0" style="width: 50px">Ẩnh hiện</th>--}} 
                             {{--<th class="border-0" style="width: 50px">Sửa</th> --}}
                            <th class="border-0" style="width: 50px">Chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Item -->
                        @php $c = 0 ;   use App\Models\LoaiTin;@endphp
                        @foreach ($tin as $row )
                            
                      
                        <tr class="tr-tin border-bottom">
                             
                            <td class="border-0 font-weight-bold"> {{$row->idTin}}</td>
                            <td class="border-0 td-tieude">
                               <p class="h5  "> {{$row->TieuDe}}</p>
                               
                                <div class="div-tieude text-right">
                                    <p class="mb-0 text-right font-weight-bold"> <b>Tác giả: Quang Đạt</b></p>
                                @if ($row->created_at !='')
                                <p class="my-0    font-weight-bold">Đăng lúc:   <i class="atime" > {{$row->created_at}}</i></p>
                                @endif
                                @if ($row->updated_at !='')
                                <p class="my-0    font-weight-bold">Sửa lần cuối:   <i class="atime" >  {{$row->updated_at}}</i>  </p>
                                @endif
                                </div>
                            </td>
                            <td class="border-0">
                                {{$row->TomTat}}
                            </td>
                            <td class="border-0">
                                <img width="100%" style="object-fit: cover" height="100%" src="{{$row->urlHinh}}" onerror="" alt="">
                            </td>
                            <td class="border-0 ">
                               @php
                               
                
                                   $LT = LoaiTin::find($row->idLT);
                                   if($LT != null){
                                    $ten = $LT->Ten;
                                   }else {
                                       $ten='null';
                                   }
                               @endphp
                                <i class=""><p class="m-0 font-weight-bold">Loại: {{$ten}}</p>
                                    <p class="m-0 font-weight-bold" >Nổi Bật: {{ ($row->NoiBat)?'Có':'Không' }}</p>
                                    <p class="m-0 font-weight-bold">Trạng thái: {{($row->AnHien)?'Đang Hiện':'Đang Ẩn' }}</p>
                                    <p class="m-0 font-weight-bold">{{$row->SoLanXem}} Lượt Xem</p></i>
                                    <span class="my-0">  #Thẻ:  {{$row->tags}}</span>
                            </td>
                            {{-- <td class="border-0 text-success">
                              @php
                                //   echo $row->Content;
                              @endphp
                            </td> --}}
                            {{-- <td class="border-0 text-success">
                                {{$row->idLT}}
                              </td> --}}
                              {{-- <td class="border-0 text-success">
                                {{ ($row->NoiBat)?'Nổi Bật':'' }}
                              </td> --}}
                              {{-- <td class="border-0 text-success">
                                {{($row->AnHien)?'Đang Hiện':'Đang Ẩn' }}
                              </td> --}}
                              
                              {{-- <td class="border-0 text-success">
                               Sửa
                              </td> --}}
                              <td class="border-0 ">
                              <p class="text-success"><a href="{{url("/quan-tri/edit-bai-viet/$row->idTin")}}"><button class="btn px-2 py-1 rounded-pill   btn-outline-success " type="button">Sửa</button></a></p>
                              <p class="text-danger"><a onclick="return confirm('Xoá nha');" href="{{url("/quan-tri/xoa-bai-viet/$row->idTin")}}"><button class="btn px-2 py-1  rounded-pill btn-outline-danger " type="button">Xoá</button></a></p>
                              </td>
                        </tr>
                        <!-- End of Item -->
                        @endforeach

                    </tbody>
                </table>
              
            </div>
           
            </div>
            </div>
            <?php echo $tin->links('vendor.pagination.bootstrap-4'); ?>
   
@endsection 
