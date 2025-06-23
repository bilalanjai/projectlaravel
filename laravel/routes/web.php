<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/rekomen2', function () {
    return view('rekomen2');
});
Route::get('/rekomen3', function () {
    return view('rekomen3');
});
Route::get('/food', function () {
    return view('food');
});
Route::get('/galeridasboard', function () {
    return view('galeridasboard');
});
Route::get('/homedasboard', function () {
    return view('homedasboard');
});
Route::get('/tentangdasboard', function () {
    return view('tentangdasboard');
});
Route::get('/beritadasboard', function () {
    return view('beritadasboard');
});


