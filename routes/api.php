<?php

use App\Http\Resources\LoaiTin as ResourcesLoaiTin;
use App\Models\LoaiTin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/loai-tin/{id}', function ($id) {
    return new   ResourcesLoaiTin(LoaiTin::where('idTL',$id)->get());
});
