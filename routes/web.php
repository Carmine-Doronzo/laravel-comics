<?php

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
    return view('home');
});

Route::get('/comics', function () {
    $comics = config('comics');
    //dd($comics);
    return view('comics',compact('comics'));
})->name('comics');

Route::get('/contact', function () {
    return view('contacts');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about', function () {
    return view('about');
})->name('about');