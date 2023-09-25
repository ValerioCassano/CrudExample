<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogameController;

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

Route::get('/', [PublicController::class,'homepage'])->name('home');
Route::get('/CaricaVideogioco', [VideogameController::class,'create'])->name('videogame.create');
Route::post('/Carica/Videogioco', [VideogameController::class,'store'])->name('videogame.store');
Route::get('/Videogiochi/Index', [VideogameController::class, 'index'])->name('videogame.index');
Route::get('/Videogiochi/Detail/{id}', [VideogameController::class,'show'])->name('videogame.show');
Route::get('/Videogiochi/edit/{videogame}', [VideogameController::class,'edit'])->name('videogame.edit');
Route::put('/videogame/update/{videogame}', [VideogameController::class,'update'])->name('videogame.update');
Route::delete('/videogame/delete/{videogame}', [VideogameController::class,'destroy'])->name('videogame.delete');
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('mail.contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('mail.submit');