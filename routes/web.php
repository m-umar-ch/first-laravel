<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/ninjas", function () {
    $ninjas = [
        ["id" => 1, "name" => "ninja 1", "skill" => "combat", "power" => 70],
        ["id" => 2, "name" => "ninja 2", "skill" => "archery", "power" => 60],
        ["id" => 3, "name" => "ninja 3", "skill" => "battle axe", "power" => 80]
    ];

    return view("ninjas.index", ["ninjas" => $ninjas]);
});

// if not above /ninja/{id}, this will not appear, rather /ninja/{id} will appear
Route::get("/ninjas/create", function () {
    return view("ninjas.create");
});

Route::get("/ninjas/{id}", function ($id) {
    return view("ninjas.show", ["id" => $id, "ids" => [1, 2, 3]]);
});
