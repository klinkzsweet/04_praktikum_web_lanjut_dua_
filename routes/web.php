<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraksatuController;
use App\Http\Controllers\ContactController;
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
//home.blade.php -- Route Biasa
Route::get('/',[PraksatuController::class, 'index']);


//product.blade.php --Route Prefix
Route::prefix('/category')->group( function(){
    Route::get('/marbel-edu-games',[PraksatuController::class, 'edu_games']);
    Route::get('/marbel-and-friends-kids-games',[PraksatuController::class, 'kids_games']);
    Route::get('/riri-story-books',[PraksatuController::class, 'riri']);
    Route::get('/kolak-kids-songs',[PraksatuController::class, 'kolak']);
});

//news.blade.php   Route Parameter
Route::get('/news/{berita}',[PraksatuController::class, 'news']);


//program.blade.php ==> Route Prefix
Route::prefix('/program')->group( function(){
    Route::get('/karir',[PraksatuController::class, 'karir']);
    Route::get('/magang',[PraksatuController::class, 'magang']);
    Route::get('/kunjungan-industri',[PraksatuController::class, 'kunjungan']);
});


//about-us.blade.php  Route Biasa

Route::get('/about-us',[PraksatuController::class, 'about']);


//contact-us.blade.php ==> Route Resource Only

Route::resource('/contact-us', ContactController::class,[
    'only'=> ['index']
]);

use App\Http\Controllers\ProductController;
use App\Http\Controllers\pagecontroller;


Route::get('/', [pagecontroller::class, 'home']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/program', [pagecontroller::class, 'program']);
Route::get('/news', [pagecontroller::class, 'news']);
Route::get('/about', [pagecontroller::class, 'about']);
Route::get('/contact', [pagecontroller::class, 'contact']);

