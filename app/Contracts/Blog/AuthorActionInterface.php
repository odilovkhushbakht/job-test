<?php

namespace App\Contracts\Blog;

interface AuthorActionInterface
{
    public function listAuthor();
    public function add($params);
}
