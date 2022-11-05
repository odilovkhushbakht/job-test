<?php

namespace App\Services\Blog;

use Illuminate\Support\Facades\Validator;
use App\Contracts\Blog\BlogActionInterface;
use App\Contracts\Blog\BlogRepositoryInterface;
use App\Contracts\Blog\BlogFilterRepositoryInterface;

class BlogAction implements BlogActionInterface
{
    protected $blogFilter;
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository, BlogFilterRepositoryInterface $blogFilter)
    {
        $this->blogRepository = $blogRepository;
        $this->blogFilter = $blogFilter;
    }

    public function listBlog($params)
    {
        if (isset($params['category']) or isset($params['date'])) {
            $result = $this->blogFilter->filters($params);
        } else {
            $result = $this->blogRepository->getListBlogs();
        }
        return $result;
    }

    public function findByTitle($params)
    {
        return $this->blogFilter->searchByTitle($params);
    }

    public function filters($arrayfilters)
    {
        $result = $this->blogFilter->filters($arrayfilters);
        return $result;
    }

    public function add($blog)
    {
        $data = Validator::make($blog, [
            'title' => 'required|string|max:200',
            'text' => 'required|string',
            'category_id' => 'required|integer',
            'author_id' => 'required|integer',
        ])->validate();
        $result = $this->blogRepository->add($data);
        return $result;
    }

    public function update($blog, int $id)
    {
        $data = Validator::make($blog, [
            'title' => 'required|string|max:200',
            'text' => 'required|string',
            'category_id' => 'required|integer',
            'author_id' => 'required|integer',
        ])->validate();
        $result = $this->blogRepository->update($data, $id);
        return $result;
    }

    public function delete(int $id)
    {
        $result = $this->blogRepository->delete($id);
        return $result;
    }
}
