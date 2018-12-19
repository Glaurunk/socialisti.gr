<?php

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
    return view('home')->with(['title' => 'Αρχική Σελίδα']);
});

Route::get('/contact', function () {
    return view('contact')->with(['title' => 'Επικοινωνία']);
});

Route::get('/articles', function () {
    return view('articles.index')->with(['title' => 'Αρχείο Κειμένων']);
});
