@extends('layouts.authlayout')
@section('pagetitle','Q-News - Quên Mật Khẩu') 
@section('main')
    <div class="row justify-content-center form-bg-image" data-background-lg="admin/assets/img/illustrations/signin.svg"
        style="background: url(&quot;admin/assets/img/illustrations/signin.svg&quot;);">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div
                class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                <h1 class="h3">Quên mật khẩu</h1>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                   {{session('status')}}
                  </div>
                @endif
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <!-- Form -->
                    <div class="mb-4">
                        <label for="email">Nhập Email </label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" required="" autofocus="">
                        </div>
                        @error('email')
                            <span class="badge mt-1  bg-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- End of Form -->
                    <button type="submit" class="btn btn-block btn-primary">Gửi yêu cầu</button>
                </form>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <span class="font-weight-normal">

                        <a href="{{ route('login') }}" class="font-weight-bold">Đăng nhập</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
