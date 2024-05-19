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
    $data = [
        'name' => 'Mattia',
        'lastname' => 'Giarrusso',
        'description'=> 'I am 27 years old, a junior developer studying at Boolean. I am currently taking the full stack web developer course at Boolean; I am also finishing my Master\'s degree in Business Organisation and Marketing at La Sapienza University in Rome.',
        'age' => 27,
        'email' => "giar.mat96@gmail.com",
    ];

    return view('myprofile', $data);
});

Route::get('/about-me', function() {
    return view('aboutme');
});