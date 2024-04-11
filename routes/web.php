<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', [\App\Http\Controllers\ClientControler::Class,'index']);