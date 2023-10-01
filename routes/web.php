<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/blog", function () {
    return "Hello World";
});

Route::get("/blog/{slug}-{id}", function (String $slug, String $id) {
    return [
        "slug" => $slug,
        "id" => $id
    ];
})->where(
    [
        "slug" => "[A-Za-z\-]+",
        "id" => "[0-9]+"
    ]
);
