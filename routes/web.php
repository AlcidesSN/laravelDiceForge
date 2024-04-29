<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projeto', function () {
    return view('projeto');
});

Route::get('/sobre', function () {
    return view('sobre');
});
