<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/about", function() {
    // return ['foo' => 'bar'];
    return view('about');
});

Route::get("/contact", function() {
    return view('contact');
});