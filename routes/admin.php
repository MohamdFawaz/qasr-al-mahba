<?php

use App\Http\Controllers\Admin\HomepageBannerController;
use App\Http\Controllers\Admin\MiningLicenseCodeController;
use App\Http\Controllers\Admin\PartnersController;
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

    Route::group(['prefix' => 'partner'],function () {
        Route::get('/',[PartnersController::class, 'index'])->name('partner.index');
        Route::get('/create',[PartnersController::class, 'create'])->name('partner.create');
        Route::post('/',[PartnersController::class, 'store'])->name('partner.store');
        Route::get('/edit/{id}',[PartnersController::class, 'edit'])->name('partner.edit');
        Route::put('/update/{id}',[PartnersController::class, 'update'])->name('partner.update');
        Route::delete('/delete/{id}',[PartnersController::class, 'destroy'])->name('partner.delete');
    });

    Route::group(['prefix' => 'mining-license-code'],function () {
        Route::get('/',[MiningLicenseCodeController::class, 'index'])->name('mining-license.index');
        Route::get('/create',[MiningLicenseCodeController::class, 'create'])->name('mining-license.create');
        Route::post('/',[MiningLicenseCodeController::class, 'store'])->name('mining-license.store');
        Route::get('/edit/{id}',[MiningLicenseCodeController::class, 'edit'])->name('mining-license.edit');
        Route::put('/update/{id}',[MiningLicenseCodeController::class, 'update'])->name('mining-license.update');
        Route::delete('/delete/{id}',[MiningLicenseCodeController::class, 'destroy'])->name('mining-license.delete');
    });

    Route::group(['prefix' => 'mining-resource'],function () {
        Route::get('/',[\App\Http\Controllers\Admin\MiningResourceController::class, 'index'])->name('mining-resource.index');
        Route::get('/create',[\App\Http\Controllers\Admin\MiningResourceController::class, 'create'])->name('mining-resource.create');
        Route::post('/',[\App\Http\Controllers\Admin\MiningResourceController::class, 'store'])->name('mining-resource.store');
        Route::get('/edit/{id}',[\App\Http\Controllers\Admin\MiningResourceController::class, 'edit'])->name('mining-resource.edit');
        Route::put('/update/{id}',[\App\Http\Controllers\Admin\MiningResourceController::class, 'update'])->name('mining-resource.update');
        Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\MiningResourceController::class, 'destroy'])->name('mining-resource.delete');
    });
});
