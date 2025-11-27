<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/',[\App\Http\Controllers\AtelierController::class,'index'])->name('index');

Route::get('/ateliers',[\App\Http\Controllers\AtelierController::class,'index'])->name('atelier.index');
Route::get('/ateliers/{atelier}',[\App\Http\Controllers\AtelierController::class,'show'])->name('atelier.show');

Route::get('/confidentialite',function(){
 return view ('confidentialite');
})->name('charte');

Route::middleware('auth')->group(function (){
    Route::prefix('/administration')->name('administration.')->group(function () {
        Route::prefix('/ateliers')->name('atelier.')->group(function (){
            Route::get('/', [\App\Http\Controllers\AdminAtelierController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\AdminAtelierController::class, 'create'])->name('create')->can('create','\App\Models\Atelier');
            Route::post('/store', [\App\Http\Controllers\AdminAtelierController::class, 'store'])->name('store')->can('create','\App\Models\Atelier');
            Route::get('/{atelier}', [\App\Http\Controllers\AdminAtelierController::class, 'edit'])->name('edit')->can('update','atelier');
            Route::patch('/{atelier}', [\App\Http\Controllers\AdminAtelierController::class, 'update'])->name('update')->can('update','atelier');
            Route::delete('/{atelier}', [\App\Http\Controllers\AdminAtelierController::class, 'destroy'])->name('destroy')->can('delete','atelier');
        });
    });
});

Route::get('/paniers', function(){
    return view('panier.index');
})->middleware('auth')->name('paniers');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
