<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArtikelModelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaModelController;
use App\Http\Controllers\DosenModelController;
use App\Http\Controllers\HobiModelController;
use App\Http\Controllers\MatkulModelController;
use App\Http\Controllers\KeluargaModelController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function(){
    Route::get('/', [HobiModelController::class, 'index'])->name('dashboard');
    Route::get('/profile/{param}/{ttl}/{alamat}', [ProfileController::class, 'index'])->name('profile');
    Route::get('/pengalaman', [PengalamanController::class, 'experience'])->name('pengalaman');

    Route::prefix('products')->group(function(){
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/marbel-edu-game', function (){
            return "Marbel Edu Game";
        });
        Route::get('/marbel-and-friends-kids-games', function (){
            return "Marbel and Friends Kids Games";
        });
        Route::get('/riri-story-books', function (){
            return "Riri Story Books";
        });
        Route::get('/kolak-kids-song', function (){
            return "Kolak Kids Song";
        });
    });

    Route::get('/news/{param}', [NewsController::class, 'show']);

    Route::prefix('program')->group(function(){
        Route::get('/', [ProgramController::class, 'index']);
        Route::get('/karir', function (){
            return "Karir";
        });
        Route::get('/magang', function (){
            return "Magang";
        });
        Route::get('/kunjungan-industri', function (){
            return "Kunjungan Industri";
        });
    });

    Route::get('/aboutus', [AboutUsController::class, 'index']);
    Route::get('/contactus', [ContactUsController::class, 'index']);
    Route::get('/artikel', [ArtikelModelController::class, 'index'])->name('artikel');
    Route::get('/siswa', [SiswaModelController::class, 'index'])->name('siswa');
    Route::get('/dosen', [DosenModelController::class, 'index'])->name('dosen');
    Route::get('/hobi', [HobiModelController::class, 'index'])->name('hobi');
    Route::get('/matkul', [MatkulModelController::class, 'index'])->name('matkul');
    Route::get('/keluarga', [KeluargaModelController::class, 'index'])->name('keluarga');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
