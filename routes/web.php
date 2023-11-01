<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DatoController;
use App\Http\Controllers\ApiController;

//api

use Illuminate\Support\Facades\Http;

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
/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/users/{user_id}', [UserController::class, 'index']);

Route::get('/materias/{id}',[MateriaController::class, 'materia']);

Route::get('/', PostController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');


Route::get('/home',[DatoController::class,'index'])->name('home');


Route::get('/add_persona',[DatoController::class,'add'])->name('add_persona');

Route::get('/edit_persona/{id}',[DatoController::class,'edit'])->name('edit_persona');

Route::put('/update_persona/{id}',[DatoController::class,'update'])->name('update_persona.update');

Route::post('/post_persona',[DatoController::class,'store'])->name('post_persona.store');

Route::delete('/delete_persona/{id}',[DatoController::class,'delete'])->name('delete_persona');

/*

Route::get('/home/api',[ApiController::class,'traer'])->name('traer');

Route::get('/home/api/{nombre}',[ApiController::class,'mostrar'])->name('mostrar');

Route::get('/home/api/pokemon',[ApiController::class,'vista'])->name('vista');

Route::get('/home/apis',[ApiController::class,'apis'])->name('apis');

*/


Route::get('home/api',[ApiController::class,'apis'])->name('apis');

Route::get('/home/dato',[DatoController::class,'dato'])->name('home');
