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

    $data = [
        'message' => 'Laravel is fantastic',
        'menu' => ['Home', 'About', 'Contact', 'Info']
    ];

    return view('home', $data);
});

Route::get('login', function () {

    $message = 'Login in this page';

    return view('login', compact('message'));
});

Route::get('about', function () {

    $message = 'This is the page of about';
    $text = 'lorem ipsum dolor';

    return view('about', compact('message','text'));
});
