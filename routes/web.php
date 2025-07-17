<?php

/* now connected to git */

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
