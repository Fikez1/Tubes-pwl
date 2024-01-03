<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CabangController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cabang',[CabangController::class, 'index']) 

->middleware(['auth', 'verified'])->name('cabang');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cabangs', [CabangController::class,'index'])->name('cabang');
    Route::get('/cabang/create', [CabangController::class,'create'])->name('cabang.crate');
    Route::post('/cabangs', [CabangController::class,'store'])->name('cabang.store');

});

require __DIR__.'/auth.php';
