<?php

use App\Http\Controllers\BankDataController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\ClothesTypeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/clothes', [ClothesController::class, 'index'])->middleware('CheckAdmin');
Route::get('/clothestype', [ClothesTypeController::class, 'index'])->middleware('CheckAdmin');
Route::get('/users', [UserController::class, 'index'])->middleware('CheckAdmin');
Route::get('/discounts', [DiscountController::class, 'index'])->middleware('CheckAdmin');
Route::get('/bankdata', [BankDataController::class, 'index'])->middleware('CheckAdmin');
Route::get('/favorites', [UserController::class, 'favoritesIndex']);
Route::get('/shoppinCart', [UserController::class, 'shoppinCartIndex']);


Route::get('/newClothes', [ClothesController::class, 'createView'])->middleware('CheckAdmin');
Route::get('/newClothesType', [ClothesTypeController::class, 'createView'])->middleware('CheckAdmin');


Route::get('/saveClothesType', [ClothesTypeController::class, 'store'])->middleware('CheckAdmin');
Route::get('/saveClothes', [ClothesController::class, 'store'])->middleware('CheckAdmin');
require __DIR__ . '/auth.php';
