<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\AcheterJeuController;


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
    return view('pages/accueil');
});

Route::get('/admin', function(){
    return view('admin/admin');
});

Route::get('/acheter-jeu', function(){
    return view('pages/jeu');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');
/* Route::get('/acheter-jeu', [App\Http\Controllers\AcheterJeuController::class, 'index'])->name('acheter-jeu'); */


//CRUD JEU
Route::get('admin/jeu', [JeuController::class, 'index'])->name("jeu.index");
Route::get('admin/jeu/create', [JeuController::class, 'create'])->name("jeu.create");
Route::post('admin/jeu/store', [JeuController::class, 'store'])->name("jeu.store");
Route::get('admin/jeu/{id}/edit', [JeuController::class, 'edit'])->name("jeu.edit");
Route::put('admin/jeu/{id}/update', [JeuController::class, 'update'])->name("jeu.update");
Route::get('admin/jeu/{id}/delete', [JeuController::class, 'destroy'])->name("jeu.destroy");

