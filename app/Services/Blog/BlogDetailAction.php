<?php

namespace App\Services\Blog;

use App\Contracts\Blog\DetailAction;
use App\Contracts\Blog\BlogDetailRepositoryInterface;

class BlogDetailAction implements DetailAction
{
    protected $blogDetail;

    public function __construct(BlogDetailRepositoryInterface $blogDetail)
    {
        $this->blogDetail = $blogDetail;
    }

    public function detailPage($id)
    {
        $result = $this->blogDetail->blog($id);
        return $result;
    }
}
