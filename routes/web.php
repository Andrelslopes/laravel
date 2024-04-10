<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola/{text}', function ($text){
    echo 'Olá, ' . $text;
});