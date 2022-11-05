<?php

namespace App\Repositories\Blog;

use App\Contracts\Blog\CategoryRepositoryInterface;
use App\Models\Blog\BlogCategoryModel;

class BlogCategoryRepository implements CategoryRepositoryInterface
{
    public function listCategory()
    {
        $result = BlogCategoryModel::all();
        return $result;
    }

    public function add($nameCategory)
    {
        $category = BlogCategoryModel::where("name", $nameCategory)->first();
        if (!$category) {
            $category = new BlogCategoryModel();
            $category->name = $nameCategory;
            $category->save();
        }
        return $category;
    }
}
