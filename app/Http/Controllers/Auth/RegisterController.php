<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Mailapp;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'username' => ['required', 'string', 'max:100'],
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed']
        ];

        $messages = [
            'username.required' => 'Tên đăng nhập không để trống!',
            'username.max' => 'Tên đăng nhập tối đa 100 ký tự',
            'name.required' => 'Họ tên không để trống!',
            'name.max' => 'Họ tên tối đa 100 ký tự',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Vui lòng nhập đúng định dạng Email!',
            'email.max' => 'Email tối đa 255 ký tự',
            'email.unique' => 'Email đã được sử dụng!',
            'password.required' => 'Mật khẩu không để trống',
            'password.min' => 'Mật khẩu tối thiểu 3 ký tự',
            'password.confirmed' => 'Mật khẩu không khớp!'

        ];
        return Validator::make($data, $rules, $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $us =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
        Mail::send('mailviews.mailwellcome', $data, function ($messages) use ($data) {
            $messages->to($data["email"], $data["name"])
                ->subject("Chào mừng đến với QNews");
        });
        return $us;
    }
}
