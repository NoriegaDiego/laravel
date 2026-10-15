<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Group;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'],function (){
    //Route::resource('post', PostController::class);
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
        ]);
});

