<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'blog_posts'; //rename table versi jamak Post (posts)

    protected $fillable = [
        'slug',
        'title',
        'author',
        'content',
    ];
}
