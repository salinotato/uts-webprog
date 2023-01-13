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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/detail1', function () {
    return view('detail_book1.book1');
})-> name('detail1');

Route::get('/detail1', function () {
    return view('detail_book2.book2');
})-> name('detail1');

Route::get('/detail1', function () {
    return view('detail_book3.book3');
})-> name('detail1');

Route::get('/detail1', function () {
    return view('detail_book4.book4');
})-> name('detail1');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
