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
            <h4 class="font-weight-bold">Thêm Bài Viết</h4>
             
        </div> 
    </div>
</div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body"> 
                    <form action="{{ url('/quan-tri/them-bai-viet-moi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="TieuDe">Tiêu Đề </label>
                                <input type="text" name="TieuDe" class="form-control @error('TieuDe') is-invalid @enderror" id="TieuDe"
                                    aria-describedby="emailHelp" value="{{old('TieuDe')}}">
                                    @error('TieuDe')
                                        <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="my-2">
                                <label for="TomTat">Tóm Tắt Bài Viết</label>
                                <textarea class="form-control @error('TieuDe') is-invalid @enderror" placeholder="Tóm Tắt..." name="TomTat" id="TomTat"
                                    rows="4"> {{old('TomTat')}} </textarea>
                                    @error('TomTat')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="NoiDung">Nội Dung Bài Viết</label>
                                <textarea class="form-control @error('TieuDe') is-invalid @enderror" placeholder="Nội dung..." name="NoiDung" id="NoiDung"
                                    rows="4">{{old('NoiDung')}} </textarea>
                                    @error('NoiDung')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="idTL">Thể Loại</label>
                                    <select class="form-select @error('idTL') is-invalid @enderror"  id="idTL" name="idTL" aria-label="">
                                    
                                        @foreach ($TL as $lt)
                                            <option @if (old('idTL') == $lt->idTL) selected @endif value="{{ $lt->idTL }}">{{ $lt->TenTL }}</option>
                                        @endforeach

                                    </select>
                                    @error('idTL')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                                </div>
                                
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" @if (old('NoiBat')) checked @endif type="checkbox" name="NoiBat" id="NoiBat">
                                    <label class="form-check-label" for="NoiBat">Nổi Bật</label>
                                </div>
                              
                           
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="idLT">Loại Tin</label>
                                    <select class="form-select @error('idLT') is-invalid @enderror" id="idLT"  name="idLT" aria-label="">
                                        
                                    </select>
                                    @error('idLT')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form-check form-switch ">
                                    <input class="form-check-input" @if (old('AnHien')) checked @endif  name="AnHien" type="checkbox" id="AnHien">
                                    <label class="form-check-label" for="AnHien">Ẩn</label>
                                </div>
                              
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="tag">Thẻ</label>
                                    <input type="text" name="tag" value="{{old('tag')}}" class="form-control" id="tag" aria-describedby="tag">
                                </div>
                                <div class="row ml-4">
                                    <div class="form-check col-lg-6 ">
                                        <input class="form-check-input" @if (old('lang') == 'vi') checked @endif  type="radio" name="lang" id="vie" value="vi"
                                            checked="">
                                        <label class="form-check-label" for="vie">
                                            Tiếng Việt
                                        </label>
                                    </div>
                                  
                                    <div class="form-check col-lg-6 ">
                                        <input class="form-check-input"  @if (old('lang') == 'en') checked @endif type="radio" name="lang" id="English"
                                            value="en">
                                        <label class="form-check-label" for="English">
                                            English
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">

                                <div class="col-lg-12 col-sm-6">
                                    <div class="">

                                        <label class="form-check-label" for="Anh">Chọn Ảnh</label>
                                    </div>
                                    <div class="form-file mb-3  ">
                                        <input type="file" class="form-file-input" id="Anh" name="Anh">
                                        <label class="form-file-label" for="Anh">
                                            <span class="form-file-text">Chưa có file nào</span>
                                            <span class="form-file-button">Chọn</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="img-thumnail col-sm-12">
                                    <img class="img-review" src="#" style="display: none" alt="">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit">Thêm Mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
