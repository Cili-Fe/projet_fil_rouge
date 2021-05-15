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

Route::get('/f', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Mes routes
Route::get('/', 'AccueilController@index')->name('accueil');

Route::get('/contact', 'AccueilController@contact')->name('contact');

Route::get('/dash', 'DashController@dash')->name('dash');
//Routes pour inserer, afficher, supprimer et modifier un conseil
Route::get('/conseil', 'ConseilController@conseil')->name('conseil');

Route::get('/add_conseil', 'ConseilController@create_conseil')->name('conseil.create');

Route::post('/insert_categorie', 'ConseilController@store_categorie')->name('categorie.store');

Route::post('/insert_conseil', 'ConseilController@store_conseil')->name('conseil.store');

Route::get('/liste_conseil', 'ConseilController@liste_conseil')->name('conseil.liste');

Route::delete('/supprimer_conseil/{conseil}', 'ConseilController@destroy')->name('delete.conseil');

Route::get('/conseil_edit/{conseil}', 'ConseilController@edit_conseil')->name('conseil.edit');

Route::patch('/conseil_edit/{conseil}', 'ConseilController@update')->name('update.conseil');

Route::get('/conseil_show/{conseil}', 'ConseilController@show_conseil')->name('conseil.show');


