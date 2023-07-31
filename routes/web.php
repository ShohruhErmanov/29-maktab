<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use  App\Http\Controllers\Admin\CategoriesController;
use  App\Http\Controllers\Admin\SliderController;
use  App\Http\Controllers\Admin\CricleController;
use  App\Http\Controllers\Admin\ImageController;
use  App\Http\Controllers\Admin\StatisticController;
use  App\Http\Controllers\Admin\LatestnewController;
use  App\Http\Controllers\Admin\GalleryController;
use  App\Http\Controllers\Admin\TribeController;
use  App\Http\Controllers\Admin\FooterController;
use  App\Http\Controllers\Admin\LeaderController;
use  App\Http\Controllers\Admin\ContactController;
use  App\Http\Controllers\Admin\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class,'index'])->name('index');
Route::get('/rahbariyat', [MainController::class,'leader'])->name('leader');
Route::get('/yangiliklar', [MainController::class,'news'])->name('news');
Route::get('/aloqa', [MainController::class,'contact'])->name('contact');
Route::get('/fotolavhalar', [MainController::class,'picture'])->name('picture');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){

     Route::resource('categories', CategoriesController::class);
     Route::resource('slider', SliderController::class);
     Route::resource('cricle', CricleController::class);
     Route::resource('image', ImageController::class);
     Route::resource('statistic', StatisticController::class);
     Route::resource('latestnew', LatestnewController::class);
     Route::resource('gallery', GalleryController::class);
     Route::resource('tribe', TribeController::class);
     Route::resource('footer', FooterController::class);
     Route::resource('leader', LeaderController::class);
     Route::resource('contact', ContactController::class);
     Route::resource('post', PostController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
