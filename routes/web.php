<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return the home page in views/pages/home
    return view('pages.home');
});
