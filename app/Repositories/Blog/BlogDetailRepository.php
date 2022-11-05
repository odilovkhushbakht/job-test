<?php

namespace App\Repositories\Blog;

use App\Models\Blog\BlogModel;
use App\Contracts\Blog\BlogDetailRepositoryInterface;

class BlogDetailRepository implements BlogDetailRepositoryInterface
{
    public function blog($id)
    {
        $result = BlogModel::with('author', 'comment')->where('id', $id)->first();
        return $result;
    }
}
