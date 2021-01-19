<?php

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
    return view('pages/accueil');
});

Route::get('/admin', function(){
    return view('admin/admin');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');

//CRUD JEU
Route::get('admin/jeu', [JeuController::class, 'index'])->middleware('admin')->name("jeu.index");
Route::get('admin/jeu/create', [JeuController::class, 'create'])->middleware('admin')->name("jeu.create");
Route::get('admin/jeu/{id}/edit', [JeuController::class, 'edit'])->middleware('admin')->name("jeu.edit");
Route::put('admin/jeu/{id}/update', [JeuController::class, 'update'])->middleware('admin')->name("jeu.update");
Route::get('admin/jeu/{id}/delete', [JeuController::class, 'destroy'])->middleware('admin')->name("jeu.destroy");