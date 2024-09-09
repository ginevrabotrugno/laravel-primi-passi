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
    $title = 'Home';

    $fruits = ['mela', 'arancia', 'uva'];
    // $fruits = [];

    $user = [
        'name' => 'Luca',
        'surname' => 'Rossi',
        'email' => 'luca@rossi.it',
        'age' => 28,
        'city' => 'Roma',
    ];

    return view('home', compact('title', 'fruits', 'user'));
});

Route::get('/about', function () {

    $title = 'About';

    $fruits = ['mango', 'kiwi', 'melone'];
    // $fruits = [];

    $user = [
        'name' => 'Marco',
        'surname' => 'Bianchi',
        'email' => 'marco@bianchi.it',
        'age' => 30,
        'city' => 'Milano',
    ];

    return view('about', compact('title', 'fruits', 'user'));
});

Route::get('/contact', function () {

    $title = 'Contact';

    $fruits = ['fragola', 'anguria', 'pesca',];
    // $fruits = [];

    $user = [
        'name' => 'Sara',
        'surname' => 'Verdi',
        'email' => 'sara@verdi.it',
        'age' => 33,
        'city' => 'Napoli',
    ];

    return view('contact', compact('title', 'fruits', 'user'));
});
