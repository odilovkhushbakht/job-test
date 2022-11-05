<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;


class BlogAuthorController extends Controller
{
    public function store()
    {
        return view('blog.author.addAuthor');
    }
}
