@extends('admin.adminlayout')

@section('main')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">User</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h4 class="font-weight-bold">Thêm User</h4>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <form action="{{ url('/quan-tri/them-user-moi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Form -->
                            <div class="mb-4 col-lg-6">
                                <label for="Ten">Họ Tên </label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    aria-describedby="name">
                                @error('name')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4 col-lg-6">
                                <label for="Ten">Tên Đăng Nhập </label>
                                <input type="text" name="username" value="{{ old('username') }}"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    aria-describedby="username">
                                @error('username')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label for="email">Địa Chỉ Email </label>
                                <input type="type" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    aria-describedby="email">
                                @error('email')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label for="diachi">Địa Chỉ </label>
                                <input type="type" name="diachi" value="{{ old('diachi') }}"
                                    class="form-control @error('diachi') is-invalid @enderror" id="diachi"
                                    aria-describedby="diachi">
                                @error('diachi')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label for="password">Mật Khẩu</label>
                                <input type="type" name="password" value="{{ old('password') }}"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    aria-describedby="password">
                                @error('password')
                                    <span class="text-danger py-2 font-weight-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mx-4">

                            <div class="form-check form-switch col-lg-4">
                                <input class="form-check-input" @if (old('active')) checked @endif name="active" type="checkbox" id="active">
                                <label class="form-check-label" for="active">Kích Hoạt</label>
                            </div>



                            <div class="form-check col-lg-4">
                                <input class="form-check-input" @if (old('idgroup') == '1') checked @endif type="radio" name="idgroup" id="admin" value="1"
                                    checked="">
                                <label class="form-check-label" for="admin">
                                    Quản Trị
                                </label>
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" @if (old('idgroup') == '0') checked @endif type="radio" name="idgroup" id="user" value="0">
                                <label class="form-check-label" for="user">
                                    Người Dùng
                                </label>
                            </div>




                        </div>
                        <button class="btn btn-lg mt-5 btn-primary" type="submit">Thêm Mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
