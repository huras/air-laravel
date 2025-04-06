<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/solucoes', function () {
    return view('pages.solucoes');
});