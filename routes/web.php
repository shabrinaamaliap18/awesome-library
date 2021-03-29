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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/books', 'App\Http\Controllers\BooksController@index');
Route::get('/books/create', 'App\Http\Controllers\BooksController@create');
Route::get('/books/{book}', 'App\Http\Controllers\BooksController@show');
Route::post('/books', 'App\Http\Controllers\BooksController@store');
Route::delete('/books/{book}', 'App\Http\Controllers\BooksController@destroy');
Route::get('/books/{book}/edit', 'App\Http\Controllers\BooksController@edit');
Route::patch('/books/{book}', 'App\Http\Controllers\BooksController@update');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/needs', 'App\Http\Controllers\NeedsController@index');
Route::get('/needs/create', 'App\Http\Controllers\NeedsController@create');
Route::post('/needs', 'App\Http\Controllers\NeedsController@store');
Route::get('/testimonis', 'App\Http\Controllers\TestimonisController@index');
Route::get('/testimonis/create', 'App\Http\Controllers\TestimonisController@create');
Route::post('/testimonis', 'App\Http\Controllers\TestimonisController@store');