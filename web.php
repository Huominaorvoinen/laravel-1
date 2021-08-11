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
    return view('welcome');
});

//Страница приветствия
Route::get('/hello/{name}', function (string $name) {
    return "Hello, {$name}";
});

//Страница с информацией
Route::get('/info', function () {
    return <<<php
    <!doctype html>
    <html lang='en'>
    <head>
        <meta charset="UFT-8">
        <title>Info about project</title>
    </head>
    <body>
        <h1>Info about project</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, nihil.
        </p>
    </body>
    </html>
    php;
});

//Страница новостей

