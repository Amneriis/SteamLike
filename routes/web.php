<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\AcheterJeuController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\AdminController;


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
Route::get('admin', [AdminController::class, 'index'])->middleware("admin");
/*
Route::get('/admin', function(){
    return view('admin/admin');
});
*/
Route::get('/acheterJeu', function(){
    return view('pages/jeu');
});

Route::get('/payementJeu', function(){
    return view('pages/payement');
});

Route::get('/profil', function(){
    return view('pages/profil');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');
/* Route::get('/acheter-jeu', [App\Http\Controllers\AcheterJeuController::class, 'index'])->name('acheterJeu'); */


//CRUD JEU
Route::get('admin/jeu', [JeuController::class, 'index'])->middleware('admin')->name("jeu.index");
Route::get('admin/jeu/create', [JeuController::class, 'create'])->middleware('admin')->name("jeu.create");
Route::post('admin/jeu/store', [JeuController::class, 'store'])->middleware('admin')->name("jeu.store");
Route::get('admin/jeu/{id}/edit', [JeuController::class, 'edit'])->middleware('admin')->name("jeu.edit");
Route::put('admin/jeu/{id}/update', [JeuController::class, 'update'])->middleware('admin')->name("jeu.update");
Route::get('admin/jeu/{id}/delete', [JeuController::class, 'destroy'])->middleware('admin')->name("jeu.destroy");
Route::get('pages/recherche', [JeuController::class, 'search'])->name("jeu.search");
Route::get('pages/{id}/payement', [JeuController::class, 'pay'])->name("jeu.pay");
Route::get('pages/{id}/jeu', [JeuController::class, 'show'])->name("jeu.show");

//CRUD TRANSACTION
    Route::post('pages/payement', [TransactionsController::class, 'store'])->name("transactions.store");
