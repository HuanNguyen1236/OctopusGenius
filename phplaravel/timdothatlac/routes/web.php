<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\BaiDangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('nguoi-dung.home');
});

Route::controller(BaiDangController::class)->group(function(){
    //Route::get('post', 'index')->name('trang-chu');
    Route::post('/upload-image', 'store')->name('them-moi-bai-dang')->middleware('auth');
    Route::get('/chi-tiet/{id}','show')->name('chi-tiet-bai-dang');
    Route::post('/cap-nhat/{id}','update')->name('xl-cap-nhat-bai-dang')->middleware('auth');
});
Route::get('post',[NguoiDungController::class, 'index'])->name('trang-chu');
Route::get('admin',[NguoiDungController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/nguoi-dung/{id}',[NguoiDungController::class,'show'])->name('thong-tin-nguoi-dung')->middleware('auth');
Route::get('dang-nhap',[NguoiDungController::class, 'login'])->name('dang-nhap')->middleware('guest');
Route::post('dang-nhap',[NguoiDungController::class, 'xuLylogin'])->name('xl-dang-nhap')->middleware('guest');
Route::get('dang-xuat',[NguoiDungController::class, 'logOut'])->name('dang-xuat')->middleware('auth');
Route::post('cap-nhat-nguoi-dung/{id}',[NguoiDungController::class,'update'])->name('xl-cap-nhat-nguoi-dung')->middleware('auth');

Route::get('dang-ky',[NguoiDungController::class, 'create'])->name('form-dang-ky')->middleware('guest');
Route::post('dang-ky',[NguoiDungController::class, 'store'])->name('dang-ky')->middleware('guest');
//dangnhappahnquyen
// Route::get('/admin/homeadmin',function(){
//     return view("admin.index");
// })->name("homeadmin");

// Route::get('/nguoidung/homenguoidung',function(){
//     return view("nguoi-dung.welcome");
// })->name("trangchunguoidung");

///danh sach bai dang
Route::get('taikhoan', [AdminController::class, 'dstaikhoan'],)->name('dstaikhoan')->middleware('auth');
Route::get('baidang', [AdminController::class, 'dsbaidang'],)->name('dsbaidang')->middleware('auth');
//danh sach admin
Route::get('taikhoanadmin', [AdminController::class, 'dstaikhoanadmin'],)->name('dstaikhoanadmin')->middleware('auth');
//xoa va duyet bai  dang
Route::get('baidangduyet', [AdminController::class, 'dsbaidangduyet'],)->name('dsbaidangduyet')->middleware('auth');
Route::post('admin/xoabaidang/{id}', [AdminController::class, 'xoabaidang'],)->name('xoabaidang')->middleware('auth');
Route::post('admin/duyetbaidang/{id}', [AdminController::class, 'duyetbaidang'],)->name('duyetbaidang')->middleware('auth');
//xoa tai khoan
Route::post('admin/xoa/{id}', [AdminController::class, 'destroy'],)->name('xoataikhoan')->middleware('auth');
//thong tin admin
Route::get('/admin/{id}',[AdminController::class,'show'])->name('thongtinadmin')->middleware('auth');
//them admin
Route::post('admin/themadmin/{id}', [AdminController::class, 'themadmin'],)->name('themadmin')->middleware('auth');
//xoa quyen admin
Route::post('admin/xoaadmin/{id}', [AdminController::class, 'xoaadmin'],)->name('xoaadmin')->middleware('auth');
//admin them bai dang
Route::get('thembaidang',[AdminController::class, 'thembaidang'])->name('thembaidang')->middleware('auth');
Route::post('thembaidang',[AdminController::class, 'thembaidang'])->name('thembaidang')->middleware('auth');
// Route::get('themadmin',[AdminController::class,'create'])->name('them-admin')->middleware('auth');
// Route::post('xlthemadmin',[AdminController::class, 'store'])->name('xl-themadmin')->middleware('auth');