<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\BaiDangController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('nguoi-dung.login');
});
Route::controller(BaiDangController::class)->group(function(){
    //Route::get('post', 'index')->name('trang-chu');
    Route::post('/upload-image', 'store')->name('them-moi-bai-dang')->middleware('auth');
    Route::get('/chi-tiet/{id}','show')->name('chi-tiet-bai-dang');
    Route::post('/cap-nhat/{id}','update')->name('xl-cap-nhat-bai-dang')->middleware('auth');
});
Route::get('post',[NguoiDungController::class, 'index'])->name('trang-chu');
Route::get('admin',[NguoiDungController::class, 'admin'])->name('admin');


//Route::get('post',[UserController::class, 'index'])->name('trang-chu')->middleware('auth');
//Route::get('post',[PostController::class, 'create'])->name('form-them-moi-bai-dang');
//Route::post('post',[PostController::class, 'store'])->name('them-moi-bai-dang');

Route::get('/nguoi-dung/{id}',[NguoiDungController::class,'show'])->name('thong-tin-nguoi-dung')->middleware('auth');
Route::get('dang-nhap',[NguoiDungController::class, 'login'])->name('dang-nhap')->middleware('guest');
Route::post('dang-nhap',[NguoiDungController::class, 'xuLylogin'])->name('xl-dang-nhap')->middleware('guest');
Route::get('dang-xuat',[NguoiDungController::class, 'logOut'])->name('dang-xuat')->middleware('auth');
Route::post('cap-nhat-nguoi-dung/{id}',[NguoiDungController::class,'update'])->name('xl-cap-nhat-nguoi-dung')->middleware('auth');

Route::get('dang-ky',[NguoiDungController::class, 'create'])->name('form-dang-ky')->middleware('guest');
Route::post('dang-ky',[NguoiDungController::class, 'store'])->name('dang-ky')->middleware('guest');


/// admin
Route::get('admin', [AdminController::class, 'dstaikhoan'],)->name('dstaikhoan');
Route::get('baidang', [AdminController::class, 'dsbaidang'],)->name('dsbaidang');
Route::get('baidangduyet', [AdminController::class, 'dsbaidangduyet'],)->name('dsbaidangduyet');
Route::post('admin/xoa/{id}', [AdminController::class, 'destroy'],)->name('xoataikhoan');
Route::post('admin/xoabaidang/{id}', [AdminController::class, 'xoabaidang'],)->name('xoabaidang');
Route::post('admin/duyetbaidang/{id}', [AdminController::class, 'duyetbaidang'],)->name('duyetbaidang');
