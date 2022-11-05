<?php

namespace App\Repositories\Blog;

use App\Models\Blog\BlogAuthorModel;
use App\Contracts\Blog\AuthorRepositoryInterface;

class BlogAuthorRepository implements AuthorRepositoryInterface
{
    public function listAuthor()
    {
        $result = BlogAuthorModel::all();
        return $result;
    }

    public function add(array $author)
    {
        $result = new BlogAuthorModel();
        $result->first_name = $author["first_name"];
        $result->last_name = $author["last_name"];
        $result->save();
        return $result;
    }
}
