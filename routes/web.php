<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    $expensiveBooks = DB::table('books')->orderBy('price', 'desc')->take(8)->get();
    $cheapBooks = DB::table('books')->orderBy('price', 'asc')->take(8)->get();
    return view('home', compact('expensiveBooks', 'cheapBooks'));
})->name('home');

Route::get('/books/category/{category_id}', function ($category_id) {
    $books = DB::table('books')->where('category_id', $category_id)->get();
    return view('books.category', compact('books', 'category_id'));
})->name('books.category');

Route::get('/books/{id}', function ($id) {
    $book = DB::table('books')->where('id', $id)->first();
    return view('books.show', compact('book'));
})->name('books.show');
