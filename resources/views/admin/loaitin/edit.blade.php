@extends('admin.adminlayout')

@section('main')
<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Loại Tin</a></li> 
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h4 class="font-weight-bold">Sửa Loại Tin</h4>
             
        </div> 
    </div>
</div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <form action="{{ url("/quan-tri/update-loai-tin/$lt->idLT") }}" method="post" enctype="multipart/form-data" >
                        @csrf 
                        @method('patch')
                        <div class="row">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="Ten">Tên Loại </label>
                                <input type="text" name="Ten" class="form-control" id="Ten"
                                    aria-describedby="Ten" value="{{$lt->Ten}}">
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-lg-8 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="ThuTu">Thứ Tự</label>
                                    <input type="text" name="ThuTu" class="form-control" value="{{$lt->ThuTu}}" id="ThuTu" aria-describedby="ThuTu">
                                </div>
                                <div class="row mx-4">
                                     
                                    <div class="form-check form-switch col-lg-4">
                                        <input class="form-check-input" {{($lt->AnHien)?'':'checked'}} name="AnHien" type="checkbox" id="AnHien">
                                        <label class="form-check-label" for="AnHien">Ẩn Loại Tin</label>
                                    </div>
                                
                                 
 
                                        <div class="form-check col-lg-4">
                                            <input class="form-check-input" type="radio" name="lang" id="vie" value="vi"
                                                checked="">
                                            <label class="form-check-label" {{($lt->lang == 'vi')?"checked":''}} for="vie">
                                                Tiếng Việt
                                            </label>
                                        </div>
                                        <div class="form-check col-lg-4">
                                            <input class="form-check-input" type="radio" {{($lt->lang == 'en')?"checked":''}} name="lang" id="English"
                                                value="en">
                                            <label class="form-check-label" for="English">
                                                English
                                            </label>
                                        </div>
                                  
                               
                                </div>
                                 <!-- Radio -->
                                 
                            </div>

                            <div class="col-lg-4 col-sm-6">
                               
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="idTL">Thể Loại</label>
                                    <select class="form-select" id="idTL" name="idTL" aria-label="">
                                        <option selected="">Chọn</option>
                                        @foreach ($TL as $tl)
                                            <option {{($tl->idTL == $lt->idTL) ?'selected':''}} value="{{ $tl->idTL }}">{{ $tl->TenTL }}</option>
                                        @endforeach

                                    </select>
                                </div>
                               
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit">Cập Nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

