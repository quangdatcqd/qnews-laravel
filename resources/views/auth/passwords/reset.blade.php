@extends('layouts.authlayout')
@section('pagetitle','Q-News - Khôi Phục Mật Khẩu') 
@section('main')
<div class="row justify-content-center form-bg-image">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <h1 class="h3 mb-4">Khôi phục mật khẩu</h1>
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif

            @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
         @endif

            <form action="{{route("password.update")}}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <!-- Form -->
                <div class="mb-4">
                    <label for="email"> Địa chỉ Email </label>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="email@gmail.com" id="email" value="{{ $email ?? old('email') }}"  name="email" required=""  >
                    </div>  
                    @error('email')
                            <span class="badge mt-1  bg-danger">{{ $message }}</span>
                        @enderror
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="mb-4">
                    <label for="password">Mật khẩu mới</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                        <input type="password" name="password" placeholder="Mật khẩu"  class="form-control" id="password" required="" autofocus="">
                    </div>  
                    @error('password')
                            <span class="badge mt-1  bg-danger">{{ $message }}</span>
                        @enderror
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="mb-4">
                    <label for="confirm_password">Xác nhận mật khẩu mới</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                        <input type="password" placeholder="Xác nhận mật khẩu" name="password_confirmation" class="form-control" id="password_confirmation"  required="">
                    </div>  
                </div>
                <!-- End of Form -->
                <button type="submit" class="btn btn-block btn-primary">Khôi phục</button>
            </form>
            <div class="d-flex justify-content-center align-items-center mt-4">
                <span class="font-weight-normal"> 
                    <a href="{{route("login")}}" class="font-weight-bold">Đăng nhập</a>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
