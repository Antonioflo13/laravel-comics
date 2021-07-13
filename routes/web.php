<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $links = config('links');
    return view('home',
    [
        "links" => $links
    ],
);
});

Route::get('/videos', function () {
    $links = config('links');
    return view('videos',
    [
        "links" => $links
    ],
);
});

Route::get('/characters', function () {
    $characters = config('comics');
    $links = config('links');
    return view('characters',
    [
        "characters" => $characters,
        "links" => $links
    ],
);
});
