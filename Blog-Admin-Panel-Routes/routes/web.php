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

        Route::get("/{id}/revisions/{revisionId}", function (string $id, string $revisionId) {
            return "<h3>Post id: " . $id . "</h3>" . "<p>RevisionId: " . $revisionId . "</p>";
        })->whereNumber('id')->whereAlphaNumeric('revisionId')->name("show");
    });

    Route::fallback(function () {
        return "<h1>Admin Resource not found</h1>";
    });
});

Route::fallback(function () {
    return "<h1>Page not Found</h1>";
});