<?php

use App\Http\Controllers\Admin\HomepageBannerController;
use App\Http\Controllers\Admin\VideoLinkController;
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
Route::group(['prefix' => "admin"], function (){
    Auth::routes();
    Route::group(['middleware' => 'auth'],function (){
        Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
    });

    Route::group(['prefix' => 'homepage-banner'],function () {
        Route::get('/',[HomepageBannerController::class, 'index'])->name('homepage_banner.index');
        Route::get('/create',[HomepageBannerController::class, 'create'])->name('homepage_banner.create');
        Route::post('/',[HomepageBannerController::class, 'store'])->name('homepage_banner.store');
        Route::get('/edit/{id}',[HomepageBannerController::class, 'edit'])->name('homepage_banner.edit');
        Route::put('/update/{id}',[HomepageBannerController::class, 'update'])->name('homepage_banner.update');
        Route::delete('/delete/{id}',[HomepageBannerController::class, 'destroy'])->name('homepage_banner.delete');
    });

    Route::group(['prefix' => 'video-link'],function () {
        Route::get('/',[VideoLinkController::class, 'index'])->name('video_link.index');
        Route::get('/create',[VideoLinkController::class, 'create'])->name('video_link.create');
        Route::post('/',[VideoLinkController::class, 'store'])->name('video_link.store');
        Route::get('/edit/{id}',[VideoLinkController::class, 'edit'])->name('video_link.edit');
        Route::put('/update/{id}',[VideoLinkController::class, 'update'])->name('video_link.update');
        Route::delete('/delete/{id}',[VideoLinkController::class, 'destroy'])->name('video_link.delete');
    });
});
