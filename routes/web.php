<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BaoHongController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ThietBiController;
use App\Http\Controllers\DemoMailController;
use App\Http\Controllers\KhoaPhongController;

use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\DonViBaoTriController;
use App\Http\Controllers\LoaiThietBiController;
use App\Http\Controllers\NhomThietBiController;
use App\Http\Controllers\SuaChuaController;
use App\Http\Controllers\ThietBiHongController;
use App\Http\Controllers\VatTuKemTheoController;
use App\Models\ThietBiModel;

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

        //Quản lý đơn vị bảo trì
        Route::prefix('donvibaotri')->group(function () {
            Route::get('/', [DonViBaoTriController::class, 'index'])->name('list_don_vi_bao_tri');
            Route::get('/search', [DonViBaoTriController::class, 'search'])->name('search_don_vi_bao_tri');
            Route::get('/getAdd', [DonViBaoTriController::class, 'getAdd'])->name('get_them_don_vi_bao_tri');
            Route::post('/postAdd', [DonViBaoTriController::class, 'postAdd'])->name('post_them_don_vi_bao_tri');
            Route::get('/delete/{id}', [DonViBaoTriController::class, 'delete']);
            Route::get('/get-edit/{id}', [DonViBaoTriController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [DonViBaoTriController::class, 'postEdit']);
        });

        //Nhóm thiết bị
        Route::prefix('nhomthietbi')->group(function () {
            Route::get('/', [NhomThietBiController::class, 'index'])->name('list_nhom_thiet_bi');
            Route::get('/search', [NhomThietBiController::class, 'search'])->name('search_nhom_thiet_bi');
            Route::get('/getAdd', [NhomThietBiController::class, 'getAdd'])->name('get_them_nhom_thiet_bi');
            Route::post('/postAdd', [NhomThietBiController::class, 'postAdd'])->name('post_them_nhom_thiet_bi');
            Route::get('/get-edit/{id}', [NhomThietBiController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [NhomThietBiController::class, 'postEdit']);
        });

        //Loại thiết bị
        Route::prefix('loaithietbi')->group(function () {
            Route::get('/', [LoaiThietBiController::class, 'index'])->name('list_loai_thiet_bi');
            Route::get('/search', [LoaiThietBiController::class, 'search'])->name('search_loai_thiet_bi');
            Route::get('/getAdd', [LoaiThietBiController::class, 'getAdd'])->name('get_them_loai_thiet_bi');
            Route::post('/postAdd', [LoaiThietBiController::class, 'postAdd'])->name('post_them_loai_thiet_bi');
            Route::get('/get-edit/{id}', [LoaiThietBiController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [LoaiThietBiController::class, 'postEdit']);
        });

        //Quản lý thiết bị
        Route::prefix('thietbi')->group(function () {
            Route::get('/listAll', [ThietBiController::class, 'listAll'])->name('list_thiet_bi_all');
            Route::get('/listChuaBanGiao', [ThietBiController::class, 'listChuaBanGiao'])->name('list_thiet_bi_chua_ban_gia');
            Route::get('/listDangSuDung', [ThietBiController::class, 'listDangSuDung'])->name('list_thiet_bi_dang_su_dung');
            Route::get('/listBaoHong', [ThietBiController::class, 'listBaoHong'])->name('list_thiet_bi_bao_hong');
            Route::get('/listDangSuaChua', [ThietBiController::class, 'listDangSuaChua'])->name('list_thiet_bi_dang_sua_chua');
            Route::get('/listNgungSuDung', [ThietBiController::class, 'listNgungSuDung'])->name('list_thiet_bi_ngung_su_dung');
            Route::get('/listThanhLy', [ThietBiController::class, 'listThanhLy'])->name('list_thiet_bi_thanh_ly');
            Route::get('/searchAll', [ThietBiController::class, 'searchAll']);
            Route::get('/searchChuaBanGiao', [ThietBiController::class, 'searchChuaBanGiao']);
            Route::get('/searchDangSuDung', [ThietBiController::class, 'searchDangSuDung']);
            Route::get('/searchBaoHong', [ThietBiController::class, 'searchBaoHong']);
            Route::get('/searchDangSuaChua', [ThietBiController::class, 'searchDangSuaChua']);
            Route::get('/searchNgungSuDung', [ThietBiController::class, 'searchNgungSuDung']);
            Route::get('/searchThanhLy', [ThietBiController::class, 'searchThanhLy']);
            Route::get('/getAdd', [ThietBiController::class, 'getAdd'])->name('get_them_thiet_bi');
            Route::post('/postAdd', [ThietBiController::class, 'postAdd'])->name('post_them_thiet_bi');
            Route::get('/delete/{id}', [ThietBiController::class, 'delete']);
            Route::get('/get-edit/{id}', [ThietBiController::class, 'getEdit']);
            Route::post('/post-edit/{id}', [ThietBiController::class, 'postEdit']);
            Route::get('/getBanGiao/{id}', [ThietBiController::class, 'getBanGiao']);
            Route::post('/postBanGiao/{id}', [ThietBiController::class, 'postBanGiao']);
            Route::get('/thanhly/{id}',[ThietBiController::class,'thanhLy']);
            Route::get('/hoSo/{id}', [ThietBiController::class,'getHoSo']);
        });

        Route::prefix('suachua')->group(function () {
            Route::get('/list', [SuaChuaController::class,'index'])->name('list_dang_sua_chua');
            Route::get('/getAdd/{id}', [SuaChuaController::class, 'getAdd']);
            Route::post('/postAdd/{id}', [SuaChuaController::class, 'postAdd']);
            Route::get('/getEdit/{id}', [SuaChuaController::class,'getEdit']);
            Route::post('/postEdit/{id}', [SuaChuaController::class,'postEdit']);
            Route::get('/getBanGiao/{id}', [SuaChuaController::class,'getBanGiao']);
            Route::post('/postBanGiao/{id}', [SuaChuaController::class,'postBanGiao']);
        });

        Route::prefix('baohong')->group(function () {
            Route::get('/getAdd/{id}', [BaoHongController::class, 'getAdd']);
            Route::post('/postAdd/{id}', [BaoHongController::class, 'postAdd']);
            Route::get('/list', [BaoHongController::class, 'index'])->name('list_bao_hong');
            Route::get('/delete/{id}', [BaoHongController::class, 'delete']);
        });


        Route::prefix('ajax')->group(function () {
            Route::get('/loaiThietBi/{idNhomThietBi}', [AjaxController::class, 'getLoaiThietBi']);
            Route::get('/donViBaoTri/{idNhaCungCap}', [AjaxController::class, 'getDonViBaoTri']);
            Route::get('/user/{idKhoaPhong}', [AjaxController::class, 'getUser']);
        });
    });
});


// Route::get('/demo', [BrandController::class, 'index']);
// Route::post('/demo1', [BrandController::class, 'add']);

Route::get('/test', function () {
    return view('BaoHongThietBi.list');
});
Route::get('/test1', [ThietBiController::class, 'index']);
