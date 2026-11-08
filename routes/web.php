<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/cars', function () {
    return view('cars');
})->name('cars');
Route::get('/agents', function () {
    return view('agents');
})->name('agents');
Route::get('/promo', function () {
    return view('promo');
})->name('promo');
Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/blog_detail', function () {
    return view('blog_detail');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
