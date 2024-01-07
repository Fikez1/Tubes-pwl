<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokoController;
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

Route::get('/cabang',[TokoController::class, 'index']) 

->middleware(['auth', 'verified'])->name('cabang');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tokos', [TokoController::class,'index'])->name('toko');
    Route::get('/toko/create', [TokoController::class,'create'])->name('toko.crate');
    Route::post('/tokos', [TokoController::class,'store'])->name('toko.store');
    Route::get('/toko/{id}/edit', [TokoController::class,'edit'])->name('toko.edit');
    Route::match(['put', 'patch'], '/tokos/{id}',
    [TokoController::class, 'update'])->name('toko.update');

});

require __DIR__.'/auth.php';
