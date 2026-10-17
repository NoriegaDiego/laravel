<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





Route::group(['prefix' => 'dashboard', 'middleware' => ['auth',"admin"]], function (){

    Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController:: class,
    ]);
});

Route::group(['prefix' => 'blog'], function () {
    Route::controller(BlogController::class)->group(function (){
        Route::get('/',"index")->name("web.blog.index");
        Route::get('/{post}',"show")->name("web.blog.show");
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
