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
            <h4 class="font-weight-bold">Sửa Bài Viết</h4>
             
        </div> 
    </div>
</div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <form action="{{ url("/quan-tri/update-bai-viet/$tin->idTin") }}" method="post" enctype="multipart/form-data" >
                        @csrf 
                        @method('patch')
                        <div class="row">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="TieuDe">Tiêu Đề </label>
                                <input type="text" name="TieuDe" class="form-control @error('TieuDe') is-invalid @enderror" value="{{$tin->TieuDe}}" id="TieuDe"
                                    aria-describedby="emailHelp">
                                    @error('TieuDe')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="TomTat">Tóm Tắt Bài Viết</label>
                                <textarea class="form-control " placeholder="Tóm Tắt..." name="TomTat" id="TomTat"
                                    rows="4">{{$tin->TomTat}}</textarea>
                                    @error('TomTat')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <label for="NoiDung">Nội Dung Bài Viết</label>
                                <textarea class="form-control" placeholder="Nội dung..." name="NoiDung" id="NoiDung"
                                    rows="4">{{$tin->Content}}</textarea>
                                    @error('NoiDung')
                                    <span class="text-danger py-2 font-weight-bold">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="idTL">Thể Loại</label>
                                    <select class="form-select" id="idTL" name="idTL" aria-label="">
                                       
                                        @foreach ($TL as $tl )
                                            <option @if ($tl->idTL == $tin->idTL)
                                                selected
                                            @endif value="{{$tl->idTL}}">{{$tl->TenTL}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"  {{ ($tin->NoiBat)?'checked':''}}
                                        
                                    name="NoiBat" id="NoiBat"> 
                                    <label class="form-check-label" for="NoiBat">Bài Viết Nổi Bật</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="idLT">Loại Tin</label>
                                    <select class="form-select" id="idLT"  name="idLT"  aria-label="">
                                    <option selected value="{{$tin->idLT}}"> </option>
                                    </select>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="hidden" name="" id="validLT" value="{{$tin->idLT}}">
                                    <input class="form-check-input" name="AnHien" type="checkbox" {{($tin->AnHien)?'':'checked'}} id="AnHien">
                                    <label class="form-check-label" for="AnHien">Ẩn Bài Viết</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="tag">Thẻ</label>
                                    <input type="text" name="tag" value="{{$tin->tags}}" class="form-control" id="tag"
                                    aria-describedby="tag">
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
                                            <span class="form-file-text">{{($tin->urlHinh =='') ?'Chưa có file nào':"$tin->urlHinh"}}</span>
                                            <span class="form-file-button">Đổi</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="img-thumnail col-sm-12">
                                    <img class="img-review" src="{{$tin->urlHinh}}"  alt=""> 
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

