<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

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


Route::get('/', function () {
    return view('welcome');
});
*/

// Praktikum 1
/*
Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 1941720008 . Nama : Rizkina Hayyuni Putri';
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});
*/

/* Praktikum 2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);
*/

// Praktikum 3 - no.1
Route::get('/', [MainController::class, 'index']);

// Praktikum 3 - no.2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbelEduGames']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'marbelAndFriendsKidsGames']);
    Route::get('/riri-story-books', [CategoryController::class, 'ririStoryBooks']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolakKidsSongs']);
});

// Praktikum 3 - no.3
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{param}', [NewsController::class, 'newsParam']);

// Praktikum 3 - no.4
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

// Praktikum 3 - no.5
Route::get('/about-us', [AboutUsController::class, 'index']);

// Praktikum 3 - no.6
Route::get('/contact-us', [ContactUsController::class, 'index']);
