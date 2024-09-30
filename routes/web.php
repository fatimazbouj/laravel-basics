<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {

    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 15],
        ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 8],
        ['type' => 'veg supreme', 'base' => 'thin & cripsy', 'price' => 10],
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});
