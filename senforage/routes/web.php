<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VillageController;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/village', [VillageController::class, 'liste'])->name('village.liste');
Route::post('/village', [VillageController::class, 'persist'])->name('persistvillage');

/**
 * Route concernant les clients
 */
Route::get('/client', [ClientController::class, 'liste'])->name('client.liste');
Route::post('/client', [ClientController::class, 'persist'])->name('persistclient');
    

/**
 * Route concernant les compteurs
 */
Route::get('/compteur', [ClientController::class, 'liste'])->name('compteur.liste');


/**
 * Route::get('/categorie/add', [App\Http\Controllers\categorieController::class, 'add'])->name('addcategorie');
*Route::get('/categorie/list', [App\Http\Controllers\categorieController::class, 'list'])->name('listcategorie');
*Route::get('/categorie/delete/{id}', [App\Http\Controllers\categorieController::class, 'delete'])->name('deletecategorie');
*Route::post('/categorie/persist', [App\Http\Controllers\categorieController::class, 'persist'])->name('persistcategorie');
 */
require __DIR__.'/auth.php';
