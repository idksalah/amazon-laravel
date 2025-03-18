<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');  // Cambiado de 'welcome' a 'home'
});