<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'welcome');
});

Route::get("/ninjas", [NinjaController::class, 'index']);

// if not above /ninja/{id}, this will not appear, rather /ninja/{id} will appear
Route::get("/ninjas/create", function () {
    return view("ninjas.create");
});

Route::get("/ninjas/{id}", function ($id) {
    return view("ninjas.show", ["id" => $id, "ids" => [1, 2, 3]]);
});
