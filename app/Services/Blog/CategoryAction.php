<?php

namespace App\Services\Blog;

use App\Contracts\Blog\CategoryActionInterface;
use App\Contracts\Blog\CategoryRepositoryInterface;
use App\Models\Blog\BlogCategoryModel;
use Illuminate\Support\Facades\Validator;

class CategoryAction implements CategoryActionInterface
{
    public function listCategory(CategoryRepositoryInterface $category)
    {
        $result = $category->listCategory();
        return $result;
    }

    public function add($params, CategoryRepositoryInterface $category)
    {
        $categoryName = Validator::make($params, ['category' => 'required|string|min:4'])->validated();
        $result = $category->add($categoryName['category']);
        return $result;
    }
}
