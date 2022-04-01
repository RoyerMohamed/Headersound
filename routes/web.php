<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/profil" ,[App\Http\Controllers\UserController::class , 'show'] )->name('profil'); 
Route::put("/profil/{user}" ,[App\Http\Controllers\UserController::class , 'update'] )->name('profil.update'); 

Route::put('/profil/updatePassword',  [App\Http\Controllers\UserController::class, 'updatePassword'])->name('profil.updatePassword'); 
Route::delete('profil/delete',  [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');


Route::get("/adresse" ,[App\Http\Controllers\AdresseController::class , 'show'])->name('adresse'); 
Route::put("/adresse/{adresse}" ,[App\Http\Controllers\AdresseController::class , 'update'])->name('adresse.update');
Route::post("/adresse/store" ,[App\Http\Controllers\AdresseController::class , 'store'])->name('adresse.store'); 
Route::delete("/adresse/{adresse}" ,[App\Http\Controllers\AdresseController::class , 'delete'])->name('adresse.delete'); 

// Route::resource("/article" , App\Http\Controllers\ArticleController::class ); 

Route::get("/boutique" ,[App\Http\Controllers\articleController::class , 'index'])->name('boutique'); 
Route::put("/article/{article}" ,[App\Http\Controllers\articleController::class , 'update'])->name('article.update');
Route::post("/article/store" ,[App\Http\Controllers\articleController::class , 'store'])->name('article.store'); 
Route::delete("/article/{article}" ,[App\Http\Controllers\articleController::class , 'delete'])->name('article.delete'); 





Route::resource("/avis" , App\Http\Controllers\AvisController::class ); 
Route::resource("/campagne" , App\Http\Controllers\CampagneController::class ); 
Route::resource("/commande" , App\Http\Controllers\CommandeController::class ); 
Route::resource("/gamme" , App\Http\Controllers\GammeController::class ); 
Route::resource("/role" , App\Http\Controllers\RoleController::class ); 