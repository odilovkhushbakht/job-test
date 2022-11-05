<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;


class BlogCategoryController extends Controller
{
    public function store()
    {
        return view('blog.category.addCategory');
    }
}
