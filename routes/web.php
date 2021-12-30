<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PengaduanController as AdminPengaduanController;
use App\Http\Controllers\Admin\SuratDomisiliController;
use App\Http\Controllers\Admin\SuratIzinUsahaController;
use App\Http\Controllers\Admin\SuratLahirController;
use App\Http\Controllers\Admin\SuratMenikahController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VillageNewsController;
use App\Http\Controllers\DetailBeritaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}',[DetailBeritaController::class,'index'] )->name('detail-berita');
Route::post('/detail/{id}/comment',[DetailBeritaController::class,'store'] )->name('detail-berita-comment');

Route::prefix('layanan')->middleware('auth')
    ->group(function(){
        Route::get('/', [ProfileController::class,'index'])->name('profile');
        Route::get('/pengaduan', [PengaduanController::class,'index'])->name('layanan-pengaduan');
        Route::post('/pengaduan/store', [PengaduanController::class,'store'])->name('pengaduan-store');
        Route::get('/pengaduan/create-pengaduan', [PengaduanController::class,'createPengaduan'])->name('create-pengaduan');

        Route::get('/surat-izin-usaha', [SuratController::class, 'izinUsaha'])->name('surat-izin-usaha');
        Route::get('/surat-izin-usaha/create-surat-izin-usaha', [SuratController::class, 'createIzinUsaha'])->name('create-surat-izin-usaha');
        Route::post('/surat-izin-usaha/store', [SuratController::class,'storeIzinUsaha'])->name('surat-izin-usaha-store');

        Route::get('/surat-menikah', [SuratController::class,'menikah'])->name('surat-menikah');
        Route::get('/surat-menikah/create-surat-menikah', [SuratController::class,'createSuratMenikah'])->name('create-surat-menikah');
        Route::post('/surat-menikah/store', [SuratController::class,'storeSuratMenikah'])->name('surat-menikah-store');


        Route::get('/kelahiran', [SuratController::class,'kelahiran'])->name('surat-kelahiran');
        Route::get('/kelahiran/create-surat-kelahiran', [SuratController::class,'createKelahiran'])->name('create-surat-kelahiran');
        Route::post('/kelahiran/store', [SuratController::class,'storeSuratLahir'])->name('kelahiran-store');


        Route::get('/domisili', [SuratController::class,'domisili'])->name('surat-domisili');
        Route::get('/domisili/create-surat-domisili', [SuratController::class,'createDomisili'])->name('create-surat-domisili');
        Route::post('/domisili/store', [SuratController::class,'storeSuratDomisili'])->name('domisili-store');

    });

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', [HomeController::class,'index'])->name('admin-home');
        Route::resource('penduduk', UserController::class);
        Route::resource('pengaduan', AdminPengaduanController::class);
        Route::resource('surat-izin-usaha', SuratIzinUsahaController::class);
        Route::resource('surat-menikah', SuratMenikahController::class);
        Route::resource('surat-lahir', SuratLahirController::class);
        Route::resource('surat-domisili', SuratDomisiliController::class);
        Route::resource('berita', VillageNewsController::class);
    });

Route::get('logout', [UserController::class,'logout'])->name('logout');
Route::get('/detail/user/{id}', [DetailController::class,'detailUser'])->name('detail');
Route::put('/detail/user/{id}/update', [DetailController::class,'update'])->name('update-user');

Route::get('print-surat-domisili', function () {
    return view('pages.admin.cetak-surat-domisili');
});
