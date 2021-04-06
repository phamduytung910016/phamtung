<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DemoMailController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhoaPhongController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\ThietBiHongController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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








//Khoa Phòng

Route::get('/', [AdminController::class, 'getLogin']);

Route::post('/logIn', [AdminController::class, 'postLogin']);
Route::get('admin/getLogOut', [AdminController::class, 'logOut']);

Route::middleware('AdminLogInMiddle')->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/', [HomeController::class, 'index']);

        //Quan ly khoa phong
        Route::prefix('khoaphong')->group(function () {
            Route::get('/', [KhoaPhongController::class, 'index'])->name('khoaphong');
            Route::get('/search', [KhoaPhongController::class, 'search'])->name('search');
            Route::get('/getAdd', [KhoaPhongController::class, 'getAdd'])->name('getAdd');
            Route::post('/postAdd', [KhoaPhongController::class, 'postAdd'])->name('postAdd');
            Route::get('/delete/{id}', [KhoaPhongController::class, 'delete']);
            Route::get('/get-edit/{id}', [KhoaPhongController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [KhoaPhongController::class, 'postEdit']);
        });

        //Quan ly nguoi dung
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('nguoidung');
            Route::get('/search', [UserController::class, 'search'])->name('searchUser');
            Route::get('/getAdd', [UserController::class, 'getAdd'])->name('getAddUser');
            Route::post('/postAdd', [UserController::class, 'postAdd'])->name('postAddUser');
            Route::get('/delete/{id}', [UserController::class, 'delete']);
            Route::get('/get-edit/{id}', [UserController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [UserController::class, 'postEdit']);
        });

        //Quản lý thiết bị hỏng
        Route::prefix('thietbihong')->group(function () {
            Route::get('/', [ThietBiHongController::class, 'index'])->name('listhietbihong');
            Route::get('/search', [ThietBiHongController::class, 'search'])->name('searchThietBiHong');
            Route::get('/getAdd', [ThietBiHongController::class, 'getAdd'])->name('getThemThietBiHong');
            Route::post('/postAdd', [ThietBiHongController::class, 'postAdd'])->name('postThemThietBiHong');
            Route::get('/delete/{id}', [ThietBiHongController::class, 'delete']);
            Route::get('/get-edit/{id}', [ThietBiHongController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [ThietBiHongController::class, 'postEdit']);
            Route::get('/send-mail', [DemoMailController::class, 'sendMail']);
        });

        //Quản lý nhà cung cấp
        Route::prefix('nhacungcap')->group(function () {
            Route::get('/', [NhaCungCapController::class, 'index'])->name('list_nha_cung_cap');
            Route::get('/search', [NhaCungCapController::class, 'search'])->name('search_nha_cung_cap');
            Route::get('/getAdd', [NhaCungCapController::class, 'getAdd'])->name('get_them_nha_cung_cap');
            Route::post('/postAdd', [NhaCungCapController::class, 'postAdd'])->name('post_them_nha_cung_cap');
            Route::get('/delete/{id}', [NhaCungCapController::class, 'delete']);
            Route::get('/get-edit/{id}', [NhaCungCapController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [NhaCungCapController::class, 'postEdit']);
        });
    });
});


// Route::get('/demo', [BrandController::class, 'index']);
// Route::post('/demo1', [BrandController::class, 'add']);

Route::get('/test', [MailController::class, 'sendOfferMail']);
