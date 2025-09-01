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

// Route dasar -> halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Named route -> halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Named route -> halaman Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route dengan parameter (contoh profil user)
Route::get('/user/{id}', function ($id) {
    return "Ini halaman profil User dengan ID: " . $id;
})->name('user.profile');

// Route dengan parameter opsional
Route::get('/greeting/{name?}', function ($name = "Guest") {
    return "Halo, " . $name;
})->name('greeting');

// Grouping route (prefix admin)
Route::prefix('admin')->group(function () {
    Route::get('/edit', function () {
        return view('manage.edit');
    })->name('admin.edit');
});
