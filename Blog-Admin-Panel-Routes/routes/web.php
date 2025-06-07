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

    Route::prefix("/posts")->group(function () {
        Route::get("/", function () {
            return "<h1>Showing all the posts</h1>";
        })->name("index");

        Route::get("/create", function () {
            return "<h1>Admin create posts here</h1>";
        })->name("create");
    });
});