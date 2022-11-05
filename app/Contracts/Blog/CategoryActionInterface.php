<?php

namespace App\Contracts\Blog;

use App\Contracts\Blog\CategoryRepositoryInterface;

interface CategoryActionInterface
{
    public function listCategory(CategoryRepositoryInterface $category);
    public function add($params, CategoryRepositoryInterface $category);
}
