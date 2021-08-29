<?php

use App\Http\Controllers\Admin\AnimalSkinCategoryController;
use App\Http\Controllers\Admin\HomepageBannerController;
use App\Http\Controllers\Admin\MiningLicenseCodeController;
use App\Http\Controllers\Admin\MiningProcessController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ProductController;
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

    Route::group(['prefix' => 'mining-process'],function () {
        Route::get('/',[MiningProcessController::class, 'index'])->name('mining-process.index');
        Route::get('/create',[MiningProcessController::class, 'create'])->name('mining-process.create');
        Route::post('/',[MiningProcessController::class, 'store'])->name('mining-process.store');
        Route::get('/edit/{id}',[MiningProcessController::class, 'edit'])->name('mining-process.edit');
        Route::put('/update/{id}',[MiningProcessController::class, 'update'])->name('mining-process.update');
        Route::delete('/delete/{id}',[MiningProcessController::class, 'destroy'])->name('mining-process.delete');
        Route::delete('/delete-image/{id}',[MiningProcessController::class, 'deleteImage'])->name('mining-process.delete-image');
    });

    Route::group(['prefix' => 'animal-skin-category'],function () {
        Route::get('/',[AnimalSkinCategoryController::class, 'index'])->name('animal-skin-category.index');
        Route::get('/create',[AnimalSkinCategoryController::class, 'create'])->name('animal-skin-category.create');
        Route::post('/',[AnimalSkinCategoryController::class, 'store'])->name('animal-skin-category.store');
        Route::get('/edit/{id}',[AnimalSkinCategoryController::class, 'edit'])->name('animal-skin-category.edit');
        Route::put('/update/{id}',[AnimalSkinCategoryController::class, 'update'])->name('animal-skin-category.update');
        Route::delete('/delete/{id}',[AnimalSkinCategoryController::class, 'destroy'])->name('animal-skin-category.delete');
    });

    Route::group(['prefix' => 'product'],function () {
        Route::get('/',[ProductController::class, 'index'])->name('product.index');
        Route::get('/create',[ProductController::class, 'create'])->name('product.create');
        Route::post('/',[ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
        Route::put('/update/{id}',[ProductController::class, 'update'])->name('product.update');
        Route::delete('/delete/{id}',[ProductController::class, 'destroy'])->name('product.delete');
        Route::delete('/delete/image/{id}',[ProductController::class, 'deleteProductImage'])->name('product-image.delete');

        Route::get('/related-options/{type}',[ProductController::class, 'getRelatedOptions'])->name('product.get-related-options');
    });

    Route::group(['prefix' => 'article'],function () {
        Route::get('/',[\App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('article.index');
        Route::get('/create',[\App\Http\Controllers\Admin\ArticleController::class, 'create'])->name('article.create');
        Route::post('/',[\App\Http\Controllers\Admin\ArticleController::class, 'store'])->name('article.store');
        Route::get('/edit/{id}',[\App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('article.edit');
        Route::put('/update/{id}',[\App\Http\Controllers\Admin\ArticleController::class, 'update'])->name('article.update');
        Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\ArticleController::class, 'destroy'])->name('article.delete');
    });

});
