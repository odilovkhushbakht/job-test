<?php

namespace App\Http\Controllers\Api\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Blog\AuthorActionInterface;


class BlogAuthorApiController extends Controller
{
    public function index(AuthorActionInterface $authorAction)
    {
        $authorList = $authorAction->listAuthor();
        return response($authorList);
    }
    public function store(Request $request, AuthorActionInterface $authorAction)
    {
        $params = $request->all();
        $result = $authorAction->add($params);
        return response($result);
    }
}
