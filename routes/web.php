<?php

use App\Http\Controllers\Adm\ContatoController as AdmContatoController;
use App\Http\Controllers\Adm\CurriculoController as AdmCurriculoController;
use App\Http\Controllers\Site\CurriculoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Adm\HomeController;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Site\ContatoController;

Route::get('/', [IndexController::class, 'index']);
Route::post('/site/add-curriculo', [CurriculoController::class, 'addCurriculo'])->name('add_curriculo');
Route::post('/site/send-contact', [ContatoController::class, 'addContact'])->name('send_contact');

Route::get('/about', function () {
	return view('about');
});
Route::get('/contact', function () {
	return view('contact');
});
Route::get('/curriculo', function () {
	return view('curriculo');
});
Route::get('/service', function () {
	return view('service');
});

Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('/adm', [HomeController::class, 'home'])->name('dashboard');
	Route::post('/remove-image', [HomeController::class, 'removeImage'])->name('remove_image');
	Route::post('/add-image', [HomeController::class, 'addImage'])->name('add_image');
	Route::get('/adm/contato', [AdmContatoController::class, 'curriculoPage'])->name('contato');
	Route::get('/remove-contato/{id}', [AdmContatoController::class, 'removeContato'])->name('remove.contato');
	
	Route::get('/adm/curriculo', [AdmCurriculoController::class, 'curriculoPage'])->name('curriculo');
	Route::get('/curriculo/download/{file}', [AdmCurriculoController::class, 'downloadCurriculo'])->name('curriculo.download');
	Route::get('/remove-curriculo/{id}', [AdmCurriculoController::class, 'removeCurriculo'])->name('remove_curriculo');

	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
	
	Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
	Route::post('register', [RegisteredUserController::class, 'store']);
});

require __DIR__ . '/auth.php';
