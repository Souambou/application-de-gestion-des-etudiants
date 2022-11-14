<?php


use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NotesController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('etudiants', EtudiantController::class);
Route::resource('notes', NotesController::class);
Route::resource('matieres', MatiereController::class);


// require __DIR__.'/auth.php';
