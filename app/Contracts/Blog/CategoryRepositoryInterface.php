<?php

namespace App\Contracts\Blog;

interface CategoryRepositoryInterface
{
    public function listCategory();
    public function add($nameCategory);
}
