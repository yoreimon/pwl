<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanKuliahController;
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
Route::get('/', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class, 'index']);
Route::get('/articles', [ArticlesController::class, 'index']);
<<<<<<< HEAD
Route::get('/hobbies', [HobbyController::class, 'index']);
=======
Route::get('/hobi', [HobbyController::class, 'index']);
Route::get('/keluarga', [FamilyController::class, 'index']);
Route::get('/mata-kuliah', [MataKuliahController::class, 'index']);
>>>>>>> c1d21601dda88c0b870af0f59a4105e49cbf11a5
