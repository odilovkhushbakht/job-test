<?php

namespace App\Contracts\Blog;

interface BlogRepositoryInterface
{
    public function getListBlogs();    
    public function update($data, $id);
    public function add($data);
    public function delete($id);
}
