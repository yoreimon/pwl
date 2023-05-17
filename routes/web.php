<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Models\Articles;
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

// Praktikum 1 Jobsheet 3
// Route::get('/', [HomeController::class, 'index']);
// Route::prefix('/products')->group(function() {
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/{name}', [ProductController::class, 'detail']);
// });
// Route::get('/news', [NewsController::class, 'index']);
// Route::get('/news/{news}', [NewsController::class, 'show']);
// Route::prefix('program')->group(function() {
//     Route::get('/', [ProgramController::class, 'index']);
//     Route::get('/{program}', [ProgramController::class, 'program']);
// });
// Route::get("/about-us", [AboutUsController::class, 'index']);
// Route::get("/contact-us", [ContactUsController::class, 'index']);

// Praktikum 2 Jobsheet 3

Auth::routes();
Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/mahasiswa/detail-nilai/{nim}', [App\Http\Controllers\MahasiswaController::class, 'detail_nilai']);
    Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
    Route::resource('/mata-kuliah', MataKuliahController::class);
    Route::resource('/keluarga', FamilyController::class);
    Route::resource('/hobi', HobbyController::class);
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/articles', ArticleController::class);
});