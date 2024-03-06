<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\MedicamentsController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\OffrirController;


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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('tasks', TaskController::class)->middleware('auth');

Route::post('/demo/{id}', [DemoController::class, "voir"]);

Route::post('/medecin/store', [MedecinController::class, 'store'])->name('medecin.store');
Route::get('/medecin/create', [MedecinController::class, 'create'])->name('medecin.create');
Route::get('/medecin/store', [MedecinController::class, 'store'])->name('medecin.store');
Route::get('/medecin', [MedecinController::class, 'index'])->name('medecin.index');
Route::get('/medecin/{medecin}', [MedecinController::class, 'show'])->name('medecin.show');
Route::get('/medecin/{medecin}/edit', [MedecinController::class, 'edit'])->name('medecin.edit');
Route::put('/medecin/{medecin}', [MedecinController::class, 'update'])->name('medecin.update');
Route::delete('/medecin/{medecin}', [MedecinController::class, 'destroy'])->name('medecin.destroy');


Route::post('/medicaments', [MedicamentsController::class, 'store']);
Route::get('/medicaments', [MedicamentsController::class, 'index'])->name('medicaments.index');

Route::get('/rapport/create', [RapportController::class, 'create'])->name('rapport.create');
Route::post('/rapport', [RapportController::class, 'store'])->name('rapport.store');
Route::get('/rapport', [RapportController::class, 'index'])->name('rapport.index');
Route::delete('/rapport/{rapport}', [RapportController::class, 'destroy'])->name('rapport.destroy');
Route::get('/rapport/{rapport}', [RapportController::class, 'show'])->name('rapport.show');


Route::get('/offrir/create/{rapport_id}', [OffrirController::class, 'create'])->name('offrir.create');
Route::post('/offrir', [OffrirController::class, 'store'])->name('offrir.store');


require __DIR__.'/auth.php';
