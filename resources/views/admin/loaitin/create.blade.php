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
            <h4 class="font-weight-bold">Thêm Loại Tin</h4>
             
        </div> 
    </div>
</div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <form action="{{ url('/quan-tri/them-loai-tin-moi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="Ten">Tên Loại </label>
                                <input type="text" name="Ten" value="{{old('Ten')}}"  class="form-control @error('Ten') is-invalid @enderror" id="Ten"
                                    aria-describedby="Ten">
                                    @error('Ten')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-lg-8 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="ThuTu">Thứ Tự</label>
                                    <input type="text" name="ThuTu" value="{{old('ThuTu')}}" class="form-control"  id="ThuTu" aria-describedby="ThuTu">
                                </div>
                                <div class="row mx-4">
                                     
                                    <div class="form-check form-switch col-lg-4">
                                        <input class="form-check-input" @if (old('AnHien')) checked @endif name="AnHien" type="checkbox" id="AnHien">
                                        <label class="form-check-label" for="AnHien">Ẩn Loại Tin</label>
                                    </div>
                                
                                 
 
                                        <div class="form-check col-lg-4">
                                            <input class="form-check-input" @if (old('lang') == 'vi') checked @endif type="radio" name="lang" id="vie" value="vi"
                                                checked="">
                                            <label class="form-check-label"  for="vie">
                                                Tiếng Việt
                                            </label>
                                        </div>
                                        <div class="form-check col-lg-4">
                                            <input class="form-check-input" @if (old('lang') == 'en') checked @endif type="radio" name="lang" id="English"
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
                                        
                                        @foreach ($TL as $lt)
                                            <option @if (old('idTL') == $lt->idTL) selected @endif value="{{ $lt->idTL }}">{{ $lt->TenTL }}</option>
                                        @endforeach

                                    </select>
                                </div>
                               
                            </div>
                        </div>
                        <button class="btn btn-lg mt-5 btn-primary" type="submit">Thêm Mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
