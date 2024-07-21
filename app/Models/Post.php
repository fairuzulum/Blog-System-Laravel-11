<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
