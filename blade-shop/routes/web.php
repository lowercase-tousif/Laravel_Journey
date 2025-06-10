<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/products/{type}/{slug}", function (string $type, string $slug) {
    $productData = [];

    if ($type == 'book') {
        $productData = [
            'name' => 'The Pragmatic Programmer',
            'price' => 1200,
            'on_sale' => true,
            'sale_price' => 950,
            'stock' => 5,
            'type' => 'book',
            'details' => ['author' => 'Andy Hunt', 'pages' => 320]
        ];
    } elseif ($type == 'gadget') {
        $productData = [
            'name' => 'Ergonomic Mouse',
            'price' => 2500,
            'on_sale' => false,
            'sale_price' => null,
            'stock' => 25,
            'type' => 'gadget',
            'details' => ['warranty' => '2 years', 'color' => 'Black']
        ];
    }

    return view('product-details', ['product' => $productData]);
})->where('type', 'book|gadget')->where('slug', '[a-z0-9-]+');