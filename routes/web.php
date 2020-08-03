<?php

use App\Book;
use Illuminate\Support\Facades\Auth;
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
    $books = Book::all();
    return view('welcome',compact('books'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('create-author', 'AuthorController@create');
Route::post('add-author', 'AuthorController@store');
Route::get('create-book', 'BookController@create');
Route::post('add-book', 'BookController@store');
Route::get('show-book/{book}','BookController@show');
Route::DELETE('delete-book/{book}', 'BookController@destroy');
