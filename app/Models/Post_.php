<?php

namespace App\Models;



class Post
{
    static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul_pertama",
            "author" => "Dani",
            "body" => "lorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit amet"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul_kedua",
            "author" => "Dani",
            "body" => "lorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit ametlorem ipsun dolor sit amet"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
