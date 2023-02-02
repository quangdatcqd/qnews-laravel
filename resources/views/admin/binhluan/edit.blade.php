@extends('admin.adminlayout')

@section('main')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Bình Luận</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h4 class="font-weight-bold">Sửa Bình Luận</h4>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <form action="{{ url('/quan-tri/update-binh-luan/'.$BL->idYKien) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <!-- Form -->
                            <div class="mb-4 col-lg-6">
                                <label for="Ten">Họ Tên </label>
                                <input type="text" name="HoTen" value="{{ $BL->HoTen }}"
                                    class="form-control @error('HoTen') is-invalid @enderror" id="HoTen"
                                    aria-describedby="HoTen">
                                @error('HoTen')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4 col-lg-6">
                                <label for="Email">Địa Chỉ Email </label>
                                <input type="type" name="Email" value="{{ $BL->Email }}"
                                    class="form-control @error('Email') is-invalid @enderror" id="Email"
                                    aria-describedby="Email">
                                @error('Email')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="mb-4">
                                <label for="idTin">Bài Viết</label>
                             
                                   
                                    <select class="form-select" id="idTin" name="idTin" aria-label="">
                                       
                                        @foreach ($tin as $tin )
                                            <option @if ($BL->idTin == $tin->idTin)
                                                selected
                                            @endif value="{{$tin->idTin}}">{{$tin->TieuDe}}</option>
                                        @endforeach

                                    </select>
                             
                                @error('idTin')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label for="NoiDung">Nội Dung Bình Luận</label>
                                <textarea type="type"     cols="30" rows="10" name="NoiDung"  
                                    class="form-control @error('NoiDung') is-invalid @enderror" id="NoiDung"
                                    aria-describedby="NoiDung"> {{ $BL->NoiDung }}</textarea>
                                @error('NoiDung')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="form-check form-switch col-lg-4">
                                <input class="form-check-input" @if ($BL->AnHien == 0) checked @endif name="AnHien" type="checkbox" id="AnHien">
                                <label class="form-check-label" for="AnHien">Ẩn Bình Luận Này</label>
                            </div>
                        </div>
                         

                        {{-- <div class="row mx-4">

                            <div class="form-check form-switch col-lg-4">
                                <input class="form-check-input" @if (old('AnHien')) checked @endif name="AnHien" type="checkbox" id="AnHien">
                                <label class="form-check-label" for="AnHien">Ẩn Bình Luận Này</label>
                            </div>
 

                        </div> --}}
                        <button class="btn btn-lg mt-5 btn-primary" type="submit">Cập Nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
