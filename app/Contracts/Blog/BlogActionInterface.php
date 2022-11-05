<?php

namespace App\Contracts\Blog;

use App\Contracts\Blog\BlogFilterRepositoryInterface;

interface BlogActionInterface
{
    public function listBlog($params);
    public function findByTitle($params);
    public function filters($arrayFilter);
    public function add($blog);
    public function update($blog, int $id);
    public function delete(int $id);
}
