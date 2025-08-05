<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog', 
        'posts' => [
            [
                'id' => '1',
                'title' => 'Article 1',
                'author' => 'Zakaria Ramadan',
                'textContent' => '111111111111111111Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nesciunt quaerat, recusandae modi saepe dolor tempora veniam voluptatibus eligendi. Eaque itaque architecto recusandae voluptate fuga similique consequuntur doloribus voluptatibus odio!'
            ],
            [
                'id' => '2',
                'title' => 'article 2',
                'author' => 'Radika Nur',
                'textContent' => '222222222222222Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nesciunt quaerat, recusandae modi saepe dolor tempora veniam voluptatibus eligendi. Eaque itaque architecto recusandae voluptate fuga similique consequuntur doloribus voluptatibus odio!'
            ]
        ]
    ]);
});

Route::get('/posts/{id}', function($id) {
    $posts = [
                [
                'id' => '1',
                'title' => 'Article 1',
                'author' => 'Zakaria Ramadan',
                'textContent' => '111111111111111111Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nesciunt quaerat, recusandae modi saepe dolor tempora veniam voluptatibus eligendi. Eaque itaque architecto recusandae voluptate fuga similique consequuntur doloribus voluptatibus odio!'
            ],
                [
                'id' => '2',
                'title' => 'article 2',
                'author' => 'Radika Nur',
                'textContent' => '222222222222222Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nesciunt quaerat, recusandae modi saepe dolor tempora veniam voluptatibus eligendi. Eaque itaque architecto recusandae voluptate fuga similique consequuntur doloribus voluptatibus odio!'
            ]
        ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });
    dd($post);
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
