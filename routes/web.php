<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hellow', function () {
    return 'hello, world!';
});

Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index'])
->name('articles.index');

Route::get('articles/create', [\App\Http\Controllers\ArticleController::class, 'create'])
    ->name('articles.create');

Route::get('articles/{id}', [Controllers\ArticleController::class, 'show'])
->name('articles.show');

Route::post('articles', [\App\Http\Controllers\ArticleController::class, 'store'])
    ->name('articles.store');

Route::get('articles/{id}/edit', [\App\Http\Controllers\ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::patch('articles/{id}', [\App\Http\Controllers\ArticleController::class, 'update'])
    ->name('articles.update');

Route::delete('articles/{id}', [Controllers\ArticleController::class, 'destroy'])
    ->name('articles.destroy');
