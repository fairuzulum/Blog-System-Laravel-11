<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/post/{post:slug}', function (Post $post) {
   
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Ahmad Fairuz Ulumuudin']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
