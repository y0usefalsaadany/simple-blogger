<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/',[ArticlesController::class,'index']);
Route::get('/add-article',[ArticlesController::class,'showAdd'])->name('show');
Route::post('/store',[ArticlesController::class,'store']);
Route::get('/delete/{id}', [ArticlesController::class,'destroy']);
Route::get('/add', function () {
    return view('add-article');
});
Route::get('find', [ArticlesController::class,'find']);