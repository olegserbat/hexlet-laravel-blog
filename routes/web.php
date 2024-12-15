<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hellow', function () {
    return 'hello, world!';
});

Route::get('/about', function () {
    $param = [
        'one'=>1,
        'two'=>'twice',
        'three'=>true
    ];
    return view('about', ['param'=>$param]);
});
