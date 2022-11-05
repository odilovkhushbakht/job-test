<?php

namespace App\Services\Blog;


use Illuminate\Support\Facades\Validator;
use App\Contracts\Blog\AuthorActionInterface;
use App\Contracts\Blog\AuthorRepositoryInterface;


class AuthorAction implements AuthorActionInterface
{
    protected $author;

    public function __construct(AuthorRepositoryInterface $author)
    {
        $this->author = $author;
    }

    public function listAuthor()
    {
        $result = $this->author->listAuthor();
        return $result;
    }

    public function add($params)
    {
        $rule = ['first_name' => 'required|string|min:3', 'last_name' => 'required|string|min:3'];
        $validAuthor = Validator::make($params, $rule)->validated();
        $result = $this->author->add($validAuthor);
        return $result;
    }
}
