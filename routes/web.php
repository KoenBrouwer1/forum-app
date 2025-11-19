<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ReplyController;
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

Route::get('/Account', function () {
    return view('account');
})->middleware(['auth', 'verified'])->name('account');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Admin', function () {
    return view('admin');
})->middleware(['auth', 'admin', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/CreateTopic', [TopicController::class, 'createtopic'])->name('topics.create'); // toont create form
    Route::post('/CreateTopic', [TopicController::class, 'storetopic'])->name('topics.store'); // slaat topic op
    Route::get('/Showtopic/{id}', [TopicController::class, 'showtopic'])->name('topics.show'); // toont topic
    Route::get('/Forum', [TopicController::class, 'postingtopic'])->name('forum'); // toont topics
    Route::get('/Forum', [SubjectController::class, 'index'])->name('subjects.index'); // toont subjects
    Route::get('/Forum/{subject}', [SubjectController::class, 'show'])->name('subjects.show');
    Route::post('/CreateSubject', [SubjectController::class, 'createsubject'])->name('subjects.create'); // slaat subject op
    Route::post('/CreateSubject', [SubjectController::class, 'storesubject'])->name('subjects.store'); // slaat subject op
    Route::get('/Forum/{id}/CreateReply', [ReplyController::class, 'createreply'])->name('replies.create'); // toont create form
    Route::post('/Showtopic/{id}/CreateReply', [ReplyController::class, 'storereply'])->name('replies.store'); // slaat reply op
    Route::post('/Forum', [ReplyController::class, 'indexreply'])->name('replies.index'); // toont replies
    Route::post('/Forum', [ReplyController::class, 'showreply'])->name('replies.show'); // toont replies





});


require __DIR__.'/auth.php';
