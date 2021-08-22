<?php

use App\Http\Controllers\Front\AnimalSkinController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MiningController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/mining-license', [MiningController::class, 'index'])->name('mining-license');
Route::get('/mining-license-code-details/{code}', [MiningController::class, 'getMiningLicenseCodeDetails'])->name('mining-license-codes');


Route::get('/animal-skin', [AnimalSkinController::class, 'index'])->name('animal-skin');

Route::get('/animal-skin/{id}', [AnimalSkinController::class, 'show'])->name('show-animal-skin');
