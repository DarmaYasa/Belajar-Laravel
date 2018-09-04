<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $filltable = ['title', 'writer', 'create_at', 'content', ];

    public static function getDataBlog(){
        $blogs = DB::table('blogs')->get();
        return $blogs;
    }
}
