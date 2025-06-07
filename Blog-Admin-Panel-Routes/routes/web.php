<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("/admin")->group(function () {
    Route::redirect("/", "/admin/dashboard");

    Route::get("/dashboard", function () {
        return "<h1>Welcome admin ! to the dashboard</h1>";
    });
});