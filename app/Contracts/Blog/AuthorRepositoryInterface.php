<?php

namespace App\Contracts\Blog;

interface AuthorRepositoryInterface
{
    public function listAuthor();
    public function add(array $author);
}
