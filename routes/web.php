<?php

use App\Http\Controllers\Adm\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\IndexController;
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



Route::get('/', [IndexController::class, 'index']);


Route::get('/adm', [HomeController::class, 'home'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/remove-image', [HomeController::class, 'removeImage'])->name('remove_image');
Route::post('/add-image', [HomeController::class, 'addImage'])->name('add_image');
Route::get('/adm/contato', function () {
    return view('adm.contato');
})->middleware(['auth', 'verified'])->name('contato');
Route::get('/adm/curriculo', function () {
    return view('adm.curriculo');
})->middleware(['auth', 'verified'])->name('curriculo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});
