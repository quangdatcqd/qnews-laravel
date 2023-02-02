@extends('layouts.authlayout')
@section('pagetitle','Q-News - Đăng Nhập') 
@section('main')
<div class="row justify-content-center form-bg-image" data-background-lg="admin/assets/img/illustrations/signin.svg" style="background: url(&quot;admin/assets/img/illustrations/signin.svg&quot;);">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <div class="text-center text-md-center mb-4 mt-md-0">
                <h1 class="mb-0 h3">Đăng nhập</h1>
            </div>
           
            <form action="{{route("login")}}" method="POST" class="mt-4">
                <!-- Form -->
                @csrf
                <div class="form-group mb-2">
                    <label for="username">Tên đăng nhập</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-user"></span></span>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Tên đăng nhập" id="username" autofocus="" value="{{old('email')}}" required="">
                         
                       
                    </div>  
                    @error('username')
                    <span class="badge mt-1  bg-danger">{{$message}}</span>
                @enderror
                    
                </div>
                <!-- End of Form -->
                <div class="form-group">
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="password">Mật khẩu</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                            <input type="password" placeholder="Mật khẩu" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required="">
                           
                        </div>  
                        @error('password')
                        <span class="badge mt-1  bg-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <!-- End of Form -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" name="remember" type="checkbox" value="" id="remember">
                            <label class="form-check-label" for="remember">
                              Duy trì đăng nhập
                            </label>
                        </div>
                        <div><a href="{{route("password.request")}}" class="small text-right">Quên mật khẩu?</a></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Đăng nhập</button>
            </form>
            {{-- <div class="mt-3 mb-4 text-center">
                <span class="font-weight-normal">or login with</span>
            </div>
            <div class="btn-wrapper my-4 text-center">
                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                </button>
                <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                    <span aria-hidden="true" class="fab fa-twitter"></span>
                </button>
                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                    <span aria-hidden="true" class="fab fa-github"></span>
                </button>
            </div> --}}
            <div class="d-flex justify-content-center align-items-center mt-4">
                <span class="font-weight-normal">
                    
                    <a href="{{route("register")}}" class="font-weight-bold">Đăng ký tài khoản</a>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
