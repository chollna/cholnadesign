<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/wecome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/crud', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/store', [ArticleController::class, 'store'])->name('store');
    Route::delete('/{product}', [ArticleController::class, 'destroy'])->name('destroy');
    Route::get('edit/{product}', [ArticleController::class, 'edit'])->name('edit');
    Route::put('edit/{product}', [ArticleController::class, 'update'])->name('update');
    

});



Route::get('/home', function () {
    return view('save');
});

Route::get('/back', function () {
    return view('backend.index');
});

Route::resource('articles', ArticleController::class)->middleware('auth');




Route::get('/in', [ArticleController::class, 'index'])->name('articles.index');




Route::get('/admin', function () {
    return view('backend.index');
});

Route::get('/', [ArticleController::class, 'page'])->name('page');

Route::get('show/{product}', [ArticleController::class, 'show'])->name('show');




require __DIR__.'/auth.php';
