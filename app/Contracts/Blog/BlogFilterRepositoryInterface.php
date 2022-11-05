<?php

namespace App\Contracts\Blog;

interface BlogFilterRepositoryInterface
{
    public function searchByTitle($title);
    public function filters($params);
}
