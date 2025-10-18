<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

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
Route::middleware(['auth', 'role:admin'])->group(function () {
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

// ✅ Path rahasia (khusus admin)
Route::get('/rahasia', function () {
    return 'Ini path rahasia';
})->middleware(['auth','verified','role:admin'])->name('rahasia');

// ✅ Route utama UTS
Route::get('/uts', [UtsController::class, 'index'])->name('uts.index');

// ✅ Menu UTS Pemrograman Web
Route::get('/uts/web', [UtsController::class, 'web'])->name('uts.web');

// ✅ Menu UTS Database
Route::get('/uts/database', [UtsController::class, 'database'])->name('uts.database');


// ======================================================================
// ✅ CRUD PRODUCT (Lengkap)
// Dibatasi hanya untuk user dengan role admin atau owner
// ======================================================================
Route::middleware(['auth', 'role:admin,owner'])->group(function () {
    Route::resource('product', ProductController::class);
});
