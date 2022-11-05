<?php

namespace App\Http\Controllers\Api\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Blog\BlogCategoryRepository;
use App\Services\Blog\CategoryAction;
use Illuminate\Support\Facades\App;

class BlogCategoryApiController extends Controller
{
    public function index()
    {
        $category = App::make(CategoryAction::class)->listCategory(new BlogCategoryRepository());
        return response($category);
    }

    public function store(Request $request)
    {
        $params = $request->all();
        $result = App::make(CategoryAction::class)->add($params, new BlogCategoryRepository());
        return response($result);
    }
}
