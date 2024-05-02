<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('peluches', function () {
    return view('peluches');
})->name('peluches');

Route::get('figuras', function () {
    return view('figuras');
})->name('figuras');

Route::get('accesorios', function () {
    return view('accesorios');
})->name('accesorios');

Route::get('ropa', function () {
    return view('ropa');
})->name('ropa');

Route::get('mangas', function () {
    return view('mangas');
})->name('mangas');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');