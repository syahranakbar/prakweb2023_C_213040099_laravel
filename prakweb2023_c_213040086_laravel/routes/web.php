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
    return view('home');
});

Route::get('/about', function () {
    return view('About', [
        "name" => "Wildan Nasrulloh Reliyanto",
        "email" => "wildannasrulloh321@gmail.com",
        "image" => "wildan.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('Blog');
});

Route::get('/post', function () {
    return view('Blog');
});
