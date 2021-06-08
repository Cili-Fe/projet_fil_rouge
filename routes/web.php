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
//Routes pour inserer, afficher, supprimer et modifier un conseil partie admin
Route::get('/conseil', 'ConseilController@conseil')->name('conseil');

Route::get('/add_conseil', 'ConseilController@create_conseil')->name('conseil.create');

Route::post('/insert_categorie', 'ConseilController@store_categorie')->name('categorie.store');

Route::post('/insert_conseil', 'ConseilController@store_conseil')->name('conseil.store');

Route::get('/liste_conseil', 'ConseilController@liste_conseil')->name('conseil.liste');

Route::delete('/supprimer_conseil/{conseil}', 'ConseilController@destroy')->name('delete.conseil');

Route::get('/conseil_edit/{conseil}', 'ConseilController@edit_conseil')->name('conseil.edit');

Route::patch('/conseil_edit/{conseil}', 'ConseilController@update')->name('update.conseil');

Route::get('/conseil_show/{conseil}', 'ConseilController@show_conseil')->name('conseil.show');

//Route pour afficher les categories
Route::get('/categorie_show/{conseil}', 'ConseilController@show_categorie')->name('categorie.show');

//Routes pour voir les details d'un conseil coté visiteurs
Route::get('/conseil_detail/{conseil}', 'ConseilController@detail_conseil')->name('conseil.detail');


// route pour la gestion des comptes
Route::Resource('users', 'UserController');

//Routes pour mon forum
Route::get('/page_forum', 'ForumController@affiche_forum')->name('forum.vue');

Route::post('/message_store', 'ForumController@store_message')->name('message.store');

Route::post('/comments/{post}', 'ForumController@store_comment')->name('comment.store');

Route::post('/reponse/{comment}', 'ForumController@reponse')->name('reponse.store');

Route::get('/notification/{post}/{notification}', 'ForumController@showNotification')->name('post.showNotification');

//Routes pour calendrier
Route::get('/page_calendrier', 'CalendrierController@affiche_calendrier')->name('calendrier');