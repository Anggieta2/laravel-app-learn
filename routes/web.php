<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
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
