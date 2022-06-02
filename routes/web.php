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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/profil" ,[App\Http\Controllers\UserController::class , 'show'] )->name('profil'); 
Route::put("/profil/{user}" ,[App\Http\Controllers\UserController::class , 'update'] )->name('profil.update'); 

Route::put('/updatePassword',  [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatePassword'); 
Route::delete('profil/{delete}',  [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');

Route::get("/adresse" ,[App\Http\Controllers\AdresseController::class , 'show'])->name('adresse'); 
Route::put("/adresse/{adresse}" ,[App\Http\Controllers\AdresseController::class , 'update'])->name('adresse.update');
Route::post("/adresse/store" ,[App\Http\Controllers\AdresseController::class , 'store'])->name('adresse.store'); 
Route::delete("/adresse/{adresse}" ,[App\Http\Controllers\AdresseController::class , 'delete'])->name('adresse.delete'); 

Route::get("/boutique" ,[App\Http\Controllers\articleController::class , 'index'])->name('boutique'); 
Route::post("/boutique/details" ,[App\Http\Controllers\articleController::class , 'show'])->name('details');
Route::post("/boutique/panier" ,[App\Http\Controllers\articleController::class , 'panier'])->name('addToCart');

Route::put("/article/{article}" ,[App\Http\Controllers\articleController::class , 'update'])->name('article.update');
Route::post("/article/store" ,[App\Http\Controllers\articleController::class , 'store'])->name('article.store'); 
Route::delete("/article/{article}" ,[App\Http\Controllers\articleController::class , 'destroy'])->name('article.delete'); 
Route::get("/article/{edit}" ,[App\Http\Controllers\articleController::class , 'edit'])->name('article.edit'); 



Route::post("/panier/ajouter_panier" , [App\Http\Controllers\PanierController::class , 'ajouter_au_panier'] )->name('panier.ajouter_au_panier'); 
Route::get("/panier" , [App\Http\Controllers\PanierController::class , 'show'] )->name('panier'); 
Route::get("/panier/delete" , [App\Http\Controllers\PanierController::class , 'delete'] )->name('panier.delete'); 
Route::post("/panier/update_cart" , [App\Http\Controllers\PanierController::class , 'update_cart'] )->name('panier.update_cart'); 
Route::get("/panier/empty_cart" , [App\Http\Controllers\PanierController::class , 'empty_cart'] )->name('panier.empty_cart'); 

Route::get("/validation" , [App\Http\Controllers\ValidationController::class , 'index'] )->name('validation.index'); 
Route::post("/validation/livraision" , [App\Http\Controllers\ValidationController::class , 'adresse_de_livraision'] )->name('validation.adresse_de_livraision');
Route::post("/validation/facturation" , [App\Http\Controllers\ValidationController::class , 'adresse_de_facturation'] )->name('validation.adresse_de_facturation'); 
Route::post("/validation/frais_de_port" , [App\Http\Controllers\ValidationController::class , 'frais_de_port'] )->name('validation.frais_de_port'); 

Route::post("/commande" , [App\Http\Controllers\CommandeController::class , 'store'] )->name('commande.store'); 
Route::post("/commande/show" , [App\Http\Controllers\CommandeController::class , 'show'] )->name('commande.show'); 

Route::get("/campagne" , [App\Http\Controllers\CampagneController::class , 'show'] )->name('campagne'); 
Route::post("/campagne/create" , [App\Http\Controllers\CampagneController::class , 'store'] )->name('campagne.store'); 
Route::delete("/campagne/{delete}" , [App\Http\Controllers\CampagneController::class , 'destroy'] )->name('campagne.delete'); 
Route::get("/campagne/{edit}" , [App\Http\Controllers\CampagneController::class , 'edit'] )->name('campagne.edit'); 
Route::put("/campagne/{campagne}" , [App\Http\Controllers\CampagneController::class , 'update'] )->name('campagne.update'); 


Route::get("/admin" , [App\Http\Controllers\AdminController::class , 'index'] )->name('admin'); 

Route::post("/gamme/store" , [App\Http\Controllers\GammeController::class , 'store'] )->name('gamme.store');
Route::post("/gamme/{edit}" , [App\Http\Controllers\GammeController::class , 'edit'] )->name('gamme.edit');
Route::delete("/gamme/{delete}" , [App\Http\Controllers\GammeController::class , 'destroy'] )->name('gamme.delete'); 
Route::put("/gamme/{gamme}" , [App\Http\Controllers\GammeController::class , 'update'] )->name('gamme.update');