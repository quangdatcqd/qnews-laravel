<?php

use App\Http\Controllers\AdminController\LoaiTinController;
use App\Http\Controllers\AdminController\TheLoaiController;
use App\Http\Controllers\AdminController\TinAdmin;
use App\Http\Controllers\AdminController\UserController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\LienHeContronller;
use App\Http\Controllers\TinController;
use App\Models\binhluan;
use App\Models\LoaiTin;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TinController::class, 'index']);
Route::get('/chi-tiet-tin/{id}', [TinController::class, 'chiTietTin']);

Route::resource('binhluan',  App\Http\Controllers\BinhLuanController::class);


Route::get('lien-he', [LienHeContronller::class, 'index']);

Route::get('/tin-trong-loai/{id}', [TinController::class, 'tinTrongLoai']);
Route::post('/gui-lien-he', [LienHeContronller::class, 'sendEmailContact']);
Route::get('/baocao', function () {
    return view('baocao');
});
Route::post('/tim-kiem', [TinController::class, 'timKiem']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\TinController::class, 'index']);
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
 


// admin Route

Route::middleware(['auth', 'quantri'])->group(function () {

    Route::get('/quan-tri', function () {
        $lt = DB::table('loaitin')->select('idLT')->get();
        $TL= DB::table('theloai')->select('idTL')->get();
        $us = DB::table('users')->select('id')->get();
        $tin = DB::table('tin')->select('idTin')->get();
        return view('admin.tongquan',['lt'=>$lt,'tl'=>$TL,'us'=>$us,'tin'=>$tin]);
    });

    Route::get('/quan-tri/bai-viet', [TinAdmin::class,"index"]);
    Route::get('/quan-tri/them-bai-viet', [TinAdmin::class,"create"]);
    Route::post('/quan-tri/them-bai-viet-moi', [TinAdmin::class,'store']);
    Route::get('/quan-tri/edit-bai-viet/{id}', [TinAdmin::class,"edit"]);
    Route::patch('/quan-tri/update-bai-viet/{id}', [TinAdmin::class,"update"]);
    Route::get('/quan-tri/xoa-bai-viet/{id}', [TinAdmin::class,"destroy"]);



    Route::get('/quan-tri/loai-tin', [LoaiTinController::class,"index"]);
    Route::get('/quan-tri/them-loai-tin', [LoaiTinController::class,"create"]);
    Route::post('/quan-tri/them-loai-tin-moi', [LoaiTinController::class,'store']);
    Route::get('/quan-tri/edit-loai-tin/{id}', [LoaiTinController::class,"edit"]);
    Route::patch('/quan-tri/update-loai-tin/{id}', [LoaiTinController::class,"update"]);
    Route::get('/quan-tri/xoa-loai-tin/{id}', [LoaiTinController::class,"destroy"]);

    
    Route::get('/quan-tri/the-loai', [TheLoaiController::class,"index"]);
    Route::get('/quan-tri/them-the-loai', [TheLoaiController::class,"create"]);
    Route::post('/quan-tri/them-the-loai-moi', [TheLoaiController::class,'store']);
    Route::get('/quan-tri/edit-the-loai/{id}', [TheLoaiController::class,"edit"]);
    Route::patch('/quan-tri/update-the-loai/{id}', [TheLoaiController::class,"update"]);
    Route::get('/quan-tri/xoa-the-loai/{id}', [TheLoaiController::class,"destroy"]);

    Route::get('/quan-tri/user', [UserController::class,"index"]);
    Route::get('/quan-tri/them-user', [UserController::class,"create"]);
    Route::post('/quan-tri/them-user-moi', [UserController::class,'store']);
    Route::get('/quan-tri/edit-user/{id}', [UserController::class,"edit"]);
    Route::patch('/quan-tri/update-user/{id}', [UserController::class,"update"]);
    Route::get('/quan-tri/xoa-user/{id}', [UserController::class,"destroy"]);


    Route::get('/quan-tri/binh-luan', [BinhLuanController::class,"index"]);
    Route::get('/quan-tri/them-binh-luan', [BinhLuanController::class,"create"]);
    Route::post('/quan-tri/them-binh-luan-moi', [BinhLuanController::class,'store']);
    Route::get('/quan-tri/edit-binh-luan/{id}', [BinhLuanController::class,"edit"]);
    Route::patch('/quan-tri/update-binh-luan/{id}', [BinhLuanController::class,"update"]);
    Route::get('/quan-tri/xoa-binh-luan/{id}', [BinhLuanController::class,"destroy"]);

});
 