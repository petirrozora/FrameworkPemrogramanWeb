<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ✅ Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ✅ About
Route::get('/about', function () {
    return view('about');
})->name('about');

// ✅ Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// ✅ User profile dengan parameter ID
Route::get('/user/{id}', function ($id) {
    return "Profil User dengan ID: " . $id;
})->name('user.profile');

// ✅ Greeting dengan parameter opsional
Route::get('/greeting/{name?}', function ($name = "Default") {
    return "Greeting " . $name;
})->name('greeting');

// ✅ Admin edit
Route::get('/admin/edit', function () {
    return "Halaman Edit Admin";
})->name('admin.edit');

// ✅ Dashboard (hanya untuk user login & verified)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Profile (hanya untuk user login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ✅ Admin dashboard (auth + admin middleware)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return "Selamat datang, Admin!";
    });
});

// ✅ User dashboard (auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', function () {
        return "Selamat datang, User!";
    });
});
