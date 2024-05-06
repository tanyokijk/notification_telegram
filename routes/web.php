<?php

use App\Http\Controllers\AuthProviderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('/posts');
});

Route::post('/add-post', [PostController::class,'store'])->name('add-post');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/github/redirect', [AuthProviderController::class, 'redirect']);

Route::get('/auth/github/callback', array(AuthProviderController::class, 'callback'));



require __DIR__.'/auth.php';
