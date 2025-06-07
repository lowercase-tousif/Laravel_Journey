<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/about", function () {
    return view("about");
})->name("about");


Route::get("/contact", function () {
    return view("contact");
})->name("contact");

Route::redirect("/old-contact-page", "contact");

Route::prefix("/projects")->group(function () {
    Route::get("/", function () {
        return "<h1>Here are my awesome projects.</h1>";
    });

    Route::get("/featured", function () {
        return "<h1>This is my most featured project.</h1>";
    });

    Route::get("/{id}", function (string $id) {
        return "<h1>Showing project with ID: " . $id . "</h1>";
    })->whereNumber('id');

    Route::get("/category/{category_name}", function (string $category_name) {
        return "<h1>Projects in category:" . $category_name . "</h1>";
    })->where("category_name", "web|mobile|game");
});


Route::fallback(function () {
    return "<h1>Whoops! The page you are looking for doesn't exist.</h1>";
});