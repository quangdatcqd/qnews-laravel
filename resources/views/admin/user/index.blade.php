@extends('admin.adminlayout')
@section('main')
<div class="py-4">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
          <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
          <li class="breadcrumb-item"><a href="#">Users</a></li> 
      </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-3 mb-lg-0">
          <h4 class="font-weight-bold">Danh Sách Users</h4>
           
      </div> 
  </div>
</div>
<div class="card border-light shadow-sm mb-4">
    <div class="card-body">
         
       <div class="table-responsive">
                <table class="table table-centered tableloaitin table-hover mb-0 rounded">
                    <thead class="thead-light ">
                        <tr >
                             
                            <th class="border-0" style="width: 60px; ">id</th>
                            <th class="border-0" style="width: 150px">Họ Tên</th>
                            <th class="border-0" style="width: 200px">Email</th>
                            <th class="border-0" style="width: 200px">Địa Chỉ</th> 
                            <th class="border-0" style="width: 150px;">Trạng Thái</th> 
                           <th class="border-0" style="width: 200px">Lịch sử</th>  
                            <th class="border-0" style="width: 50px">Sửa</th>
                        </tr>
                    </thead>
                    <tbody  >
                        <!-- Item -->
                      
                        @foreach ($US as $row )
                            
                      
                        <tr class="tr-tin border-bottom">
                             
                            <td class="border-0 font-weight-bold"> {{$row->id}}</td>
                            <td class="border-0  ">
                               <p class="h5"> {{$row->name}}</p> 
                              <div>
                                <p><b>Username: {{$row->username}}</b></p>
                              </div>
                               
                            </td>
                            <td class="border-0">
                                {{$row->email}}
                            </td>
                            <td class="border-0">
                                 {{$row->diachi}}
                            </td>
                            
                            <td class="border-0 ">
                             
                               
                                <i class=""><p class="m-0 font-weight-bold">Trạng thái: {{($row->active)?'Hoạt Động':''}}</p>
                                  <p class="m-0 font-weight-bold" >Quyền: {{($row->idgroup)?'Quản trị':'Người dùng' }}</p>
                                  </i>
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
                             <td class="border-0 text-success">
                                
                                <div class="  text-right">
                                
                                  @if ($row->created_at !='')
                                  <p class="my-0    font-weight-bold">Tạo lúc:   <i class="atime" > {{$row->created_at}}</i></p>
                                  @endif
                                  @if ($row->updated_at !='')
                                  <p class="my-0    font-weight-bold">Sửa lần cuối:   <i class="atime" >  {{$row->updated_at}}</i>  </p>
                                  @endif
                                  
                               </div>
                              </td>  
                              <td class="border-0 "> 
                                <p class="my-1"> <a href="{{url("/quan-tri/edit-user/$row->id")}}"><button class="btn px-2 py-1 rounded-pill   btn-outline-success " type="button">Sửa</button></a>
                                </p>
                                <p class="my-1"><a onclick="return confirm('Xoá nha');" href="{{url("/quan-tri/xoa-user/$row->id")}}"><button class="btn px-2 py-1  rounded-pill btn-outline-danger " type="button">Xoá</button></a>
                                </p> 
                               
                              </td>
                        </tr>
                        <!-- End of Item -->
                        @endforeach

                    </tbody>
                </table>
              
            </div>
           
            </div>
            </div>
            <?php echo $US->links('vendor.pagination.bootstrap-4'); ?>
   
@endsection 
