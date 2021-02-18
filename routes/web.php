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
    return view('welcome');
});

//Albuns
Route::get('/albuns', 'App\Http\Controllers\AlbunsController@index')->name('albuns.index')->middleware('auth');
Route::get('/albuns/{id}/show', 'App\Http\Controllers\AlbunsController@show')->name('albuns.show')->middleware('auth');
Route::get('/albuns/create', 'App\Http\Controllers\AlbunsController@create')->name('albuns.create')->middleware('auth');
Route::post('/albuns', 'App\Http\Controllers\AlbunsController@store')->name('albuns.store')->middleware('auth');
Route::get('/albuns/{id}/edit', 'App\Http\Controllers\AlbunsController@edit')->name('albuns.edit')->middleware('auth');
Route::patch('/albuns', 'App\Http\Controllers\AlbunsController@update')->name('albuns.update')->middleware('auth');
Route::get('/albuns/{id}/delete', 'App\Http\Controllers\AlbunsController@delete')->name('albuns.delete')->middleware('auth');
Route::delete('/albuns', 'App\Http\Controllers\AlbunsController@destroy')->name('albuns.destroy')->middleware('auth');


//Generos
Route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('generos.index')->middleware('auth');
Route::get('/generos/{id}/show', 'App\Http\Controllers\GenerosController@show')->name('generos.show')->middleware('auth');
Route::get('/generos/create', 'App\Http\Controllers\GenerosController@create')->name('generos.create')->middleware('auth');
Route::post('/generos', 'App\Http\Controllers\GenerosController@store')->name('generos.store')->middleware('auth');
Route::get('/generos/{id}/edit', 'App\Http\Controllers\GenerosController@edit')->name('generos.edit')->middleware('auth');
Route::patch('/generos', 'App\Http\Controllers\GenerosController@update')->name('generos.update')->middleware('auth');
Route::get('/generos/{id}/delete', 'App\Http\Controllers\GenerosController@delete')->name('generos.delete')->middleware('auth');
Route::delete('/generos', 'App\Http\Controllers\GenerosController@destroy')->name('generos.destroy')->middleware('auth');

//Musicas
Route::get('/musicas', 'App\Http\Controllers\MusicasController@index')->name('musicas.index');
Route::get('/musicas/{id}/show', 'App\Http\Controllers\MusicasController@show')->name('musicas.show')->middleware('auth');
Route::get('/musicas/create', 'App\Http\Controllers\MusicasController@create')->name('musicas.create')->middleware('auth');
Route::post('/musicas', 'App\Http\Controllers\MusicasController@store')->name('musicas.store')->middleware('auth');
Route::get('/musicas/{id}/edit', 'App\Http\Controllers\MusicasController@edit')->name('musicas.edit')->middleware('auth');
Route::patch('/musicas', 'App\Http\Controllers\MusicasController@update')->name('musicas.update')->middleware('auth');
Route::get('/musicas/{id}/delete', 'App\Http\Controllers\MusicasController@delete')->name('musicas.delete')->middleware('auth');
Route::delete('/musicas', 'App\Http\Controllers\MusicasController@destroy')->name('musicas.destroy')->middleware('auth');

//Musicos
Route::get('/musicos', 'App\Http\Controllers\MusicosController@index')->name('musicos.index')->middleware('auth');
Route::get('/musicos/{id}/show', 'App\Http\Controllers\MusicosController@show')->name('musicos.show')->middleware('auth');
Route::get('/musicos/create', 'App\Http\Controllers\MusicosController@create')->name('musicos.create')->middleware('auth');
Route::post('/musicos', 'App\Http\Controllers\MusicosController@store')->name('musicos.store')->middleware('auth');
Route::get('/musicos/{id}/edit', 'App\Http\Controllers\MusicosController@edit')->name('musicos.edit')->middleware('auth');
Route::patch('/musicos', 'App\Http\Controllers\MusicosController@update')->name('musicos.update')->middleware('auth');
Route::get('/musicos/{id}/delete', 'App\Http\Controllers\MusicosController@delete')->name('musicos.delete')->middleware('auth');
Route::delete('/musicos', 'App\Http\Controllers\MusicosController@destroy')->name('musicos.destroy')->middleware('auth');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
