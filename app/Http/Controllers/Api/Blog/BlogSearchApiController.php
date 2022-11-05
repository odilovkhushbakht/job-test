<?php

namespace App\Http\Controllers\Api\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Blog\BlogActionInterface;

class BlogSearchApiController extends Controller
{
    public function searchByTitle(Request $request, BlogActionInterface $blogAction)
    {
        $params = $request->all();
        $result = $blogAction->findByTitle($params);
        return response($result);
    }
}
