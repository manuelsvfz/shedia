<?php

use App\Http\Controllers\BankDataController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\ClothesTypeController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HomeController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'index']);

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
Route::get('/favorites', [UserController::class, 'favoritesIndex'])->name('favorites');
Route::get('/shoppinCart', [UserController::class, 'shoppinCartIndex'])->name('carrito');


Route::get('/newClothes', [ClothesController::class, 'createView'])->middleware('CheckAdmin');
Route::get('/newClothesType', [ClothesTypeController::class, 'createView'])->middleware('CheckAdmin');
Route::get('/newUser', [UserController::class, 'createView'])->middleware('CheckAdmin');
Route::get('/newDiscount', [DiscountController::class, 'createView'])->middleware('CheckAdmin');
Route::get('/newBankData', [BankDataController::class, 'createView'])->middleware('CheckAdmin');


Route::get('/saveClothesType', [ClothesTypeController::class, 'store'])->middleware('CheckAdmin');
Route::get('/saveClothes', [ClothesController::class, 'store'])->middleware('CheckAdmin');
Route::get('/saveUser', [UserController::class, 'store'])->middleware('CheckAdmin');
Route::get('/saveDisccount', [DiscountController::class, 'store'])->middleware('CheckAdmin');
Route::get('/saveBankData', [BankDataController::class, 'store'])->middleware('CheckAdmin');



Route::get('/clothes/delete/{id}', [ClothesController::class, 'deleteView'])->middleware('CheckAdmin');
Route::get('/clothesType/delete/{id}', [ClothesTypeController::class, 'deleteView'])->middleware('CheckAdmin');
Route::get('/users/delete/{id}', [UserController::class, 'deleteView'])->middleware('CheckAdmin');
Route::get('/discount/delete/{id}', [DiscountController::class, 'deleteView'])->middleware('CheckAdmin');
Route::get('/discount/delete/{id}', [DiscountController::class, 'deleteView'])->middleware('CheckAdmin');
Route::get('/bankdata/delete/{id}', [BankDataController::class, 'deleteView'])->middleware('CheckAdmin');


Route::get('/deleteClothes/{id}', [ClothesController::class, 'destroy'])->middleware('CheckAdmin');
Route::get('/deleteClothesType/{id}', [ClothesTypeController::class, 'destroy'])->middleware('CheckAdmin');
Route::get('/deleteUser/{id}', [UserController::class, 'destroy'])->middleware('CheckAdmin');
Route::get('/deleteDisccount/{id}', [DiscountController::class, 'destroy'])->middleware('CheckAdmin');
Route::get('/deleteBankData/{id}', [BankDataController::class, 'destroy'])->middleware('CheckAdmin');


Route::get('/Hombre', [ClothesController::class, 'hombre'])->middleware('CheckAdmin');
Route::get('/Mujer', [ClothesController::class, 'mujer'])->middleware('CheckAdmin');
Route::get('/Niño', [ClothesController::class, 'niño'])->middleware('CheckAdmin');


require __DIR__ . '/auth.php';