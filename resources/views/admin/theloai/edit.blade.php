@extends('admin.adminlayout')

@section('main')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Thể Loại</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-conTenTLt-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h4 class="font-weight-bold">Thêm Thể Loại</h4>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <form action="{{ url('/quan-tri/update-the-loai/'.$TL->idTL) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("patch")
                        <div class="row">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="TenTL">Tên Thể Loại </label>
                                <input type="text" name="TenTL" value="{{ $TL->TenTL }}"
                                    class="form-control @error('TenTL') is-invalid @enderror" id="TenTL"
                                    aria-describedby="TenTL">
                                @error('TenTL')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>

                        <div class="row">

                            <div class="mb-4">
                                <label class="my-1 mr-2" for="ThuTu">Thứ Tự</label>
                                <input type="text" name="ThuTu" value="{{ $TL->ThuTu}}" class="form-control" id="ThuTu"
                                    aria-describedby="ThuTu">
                                    @error('ThuTu')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mx-4">

                                <div class="form-check form-switch col-lg-3">
                                    <input class="form-check-input" @if ($TL->AnHien) checked @endif name="AnHien" type="checkbox" id="AnHien">
                                    <label class="form-check-label" for="AnHien">Ẩn Thể Loại</label>
                                </div> 
                                <div class="form-check form-switch col-lg-3">
                                    <input class="form-check-input" @if ($TL->HienMenu) checked @endif name="HienMenu" type="checkbox" id="HienMenu">
                                    <label class="form-check-label" for="HienMenu">Ẩn Trên Menu</label>
                                </div> 
                                <div class="form-check col-lg-3">
                                    <input class="form-check-input" @if ($TL->lang == 'vi') checked @endif type="radio" name="lang" id="vie" value="vi"
                                        checked="">
                                    <label class="form-check-label" for="vie">
                                        Tiếng Việt
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <input class="form-check-input" @if ($TL->lang == 'en') checked @endif type="radio" name="lang" id="English"
                                        value="en">
                                    <label class="form-check-label" for="English">
                                        English
                                    </label>
                                </div>


                            </div>
                            <!-- Radio -->

                        </div>
                        <button class="btn btn-lg mt-5 btn-primary" type="submit">Cập Nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
