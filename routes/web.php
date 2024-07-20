<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => "judul-post-pertama",
            'title' => "Judul Post Pertama",
            'author' => "Ahmad Fairuz Ulumuudin",
            'body' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium unde libero, saepe facere voluptate adipisci culpa necessitatibus eaque? Ratione fugit nihil eligendi ipsa excepturi nulla aliquid alias earum placeat! Numquam?"
        ],
        [
            'id' => 2,
            'slug' => "judul-post-kedua",
            'title' => "Judul Post Kedua",
            'author' => "Aulia Zulfa Annisa",
            'body' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium unde libero, saepe facere voluptate adipisci culpa necessitatibus eaque? Ratione fugit nihil eligendi ipsa excepturi nulla aliquid alias earum placeat! Numquam?"
        ]
    ]]);
});

Route::get('/post/{slug}', function ($slug) {
    $posts =
        [
            [
                'id' => 1,
                'slug' => "judul-post-pertama",
                'title' => "Judul Post Pertama",
                'author' => "Ahmad Fairuz Ulumuudin",
                'body' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium unde libero, saepe facere voluptate adipisci culpa necessitatibus eaque? Ratione fugit nihil eligendi ipsa excepturi nulla aliquid alias earum placeat! Numquam?"
            ],
            [
                'id' => 2,
                'slug' => "judul-post-kedua",
                'title' => "Judul Post Kedua",
                'author' => "Aulia Zulfa Annisa",
                'body' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium unde libero, saepe facere voluptate adipisci culpa necessitatibus eaque? Ratione fugit nihil eligendi ipsa excepturi nulla aliquid alias earum placeat! Numquam?"
            ]
        ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Ahmad Fairuz Ulumuudin']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
