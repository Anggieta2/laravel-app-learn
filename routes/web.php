<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/portfolio', function () {
    return view('portfolio', ['title' => 'Portfolio']);
});

Route::get('/alpine', function () {
    return view('alpine', ['title' => 'Portfolio']);
});

