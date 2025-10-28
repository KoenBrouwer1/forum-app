<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Forum', function () {
    return view('forum');
})->middleware(['auth', 'verified'])->name('forum');

Route::get('/CreatePost', function () {
    return view('createpost');
})->middleware(['auth', 'verified'])->name('createpost');

Route::get('/Account', function () {
    return view('account');
})->middleware(['auth', 'verified'])->name('account');

Route::get('/EditProfile', function () {
    return view('editprofile');
})->middleware(['auth', 'verified'])->name('editprofile');

Route::get('/ViewProfile', function () {
    return view('viewprofile');
})->middleware(['auth', 'verified'])->name('viewprofile');

Route::get('/AddContact', function () {
    return view('addcontact');
})->middleware(['auth', 'verified'])->name('addcontact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/Forum', [PostController::class, 'create'])->name('posts.create');
    Route::post('/Forum', [PostController::class, 'store'])->name('posts.store');
    Route::get('/Forum', [PostController::class, 'posting'])->name('posts.posting');
    Route::get('/AddContact', [ContactController::class, 'allusers'])->name('contacts.all');
});

require __DIR__.'/auth.php';
