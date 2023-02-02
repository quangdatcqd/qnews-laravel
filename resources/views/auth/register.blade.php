@extends('layouts.authlayout')
@section('pagetitle','Q-News - Đăng Ký') 
@section('main')
<div class="row justify-content-center form-bg-image" data-background-lg="admin/assets/img/illustrations/signin.svg" style="background: url(&quot;admin/assets/img/illustrations/signin.svg&quot;);">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <div class="text-center text-md-center mb-4 mt-md-0">
                <h1 class="mb-0 h3">Đăng ký</h1>
            </div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $message )
                        <li> {{$message}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{route("register")}}" method="POST">
                @csrf
                <!-- Form
                 -->
                 <div class="form-group mb-4">
                    <label for="name">Họ Tên</label>
                    <div class="input-group">
                        <span class="input-group-text" id="name"><span class="fas fa-user"></span></span>
                        <input type="text" class="form-control" placeholder="Họ Tên" id="name" value="{{old('name')}}" name="name" autofocus="" required="">
                    </div>  
                    @error('name')
                    <span class="badge mt-1  bg-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="username">Tên đăng nhập</label>
                    <div class="input-group">
                        <span class="input-group-text" id="username"><span class="fas fa-user"></span></span>
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" id="username" value="{{old('username')}}" name="username" autofocus="" required="">
                    </div>  
                    @error('username')
                    <span class="badge mt-1  bg-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="email">Địa chỉ Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                        <input type="email" class="form-control" placeholder="email@gmail.com" value="{{old('email')}}" id="email" name="email"  required="">
                    </div>  
                    @error('email')
                    <span class="badge mt-1  bg-danger">{{$message}}</span>
                @enderror
                </div>
                <!-- End of Form -->
                <div class="form-group">
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="password">Mật khẩu</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                            <input type="password" placeholder="Mật khẩu" class="form-control" value="{{old('password')}}" name="password" id="password" required="">
                        </div> 
                        @error('password')
                        <span class="badge mt-1  bg-danger">{{$message}}</span>
                    @enderror 
                    </div>
                    <!-- End of Form -->
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="password_confirmation">Xác nhận mật khẩu</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                            <input type="password" placeholder="Xác nhận mật khẩu" name="password_confirmation" value="{{old('password_confirmation')}}"class="form-control" id="password_confirmation" required="">
                        </div>  
                        @error('password_confirmation')
                        <span class="badge mt-1  bg-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <!-- End of Form -->
                    {{-- <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="terms" required="">
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#">terms and conditions</a>
                        </label>
                    </div> --}}
                </div>
                <button type="submit" class="btn btn-block btn-primary">Đăng ký</button>
            </form>
            {{-- <div class="mt-3 mb-4 text-center">
                <span class="font-weight-normal">or</span>
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
                    Bạn đã có tài khoản ?
                    <a href="{{route('login')}}" class="font-weight-bold">Đăng nhập</a>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
