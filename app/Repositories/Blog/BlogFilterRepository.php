<?php

namespace App\Repositories\Blog;

use App\Models\Blog\BlogModel;
use App\Contracts\Blog\BlogFilterRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class BlogFilterRepository implements BlogFilterRepositoryInterface
{
    public function searchByTitle($title)
    {
        $validTitle = Validator::make($title, ['title' => 'required|string|min:4'])->validated();
        $blog = BlogModel::select(['id', 'title', 'created'])
            ->where('title', 'LIKE', "%{$validTitle['title']}%")
            ->orderBy('created', 'desc')
            ->paginate(10)
            ->withQueryString();
        return $blog;
    }

    public function filters($params)
    {
        $rules = [
            'date' => 'nullable|date_equals:date|date_format:Y-m-d',
            'category' => 'nullable|array',
            'category.*' => 'required|integer'
        ];
        $validParams = Validator::make($params, $rules)->validated();

        if ($params['date']) {
            $result = BlogModel::select(['id', 'title', 'created'])
                ->where("created", 'like', date($validParams['date']) . '%');
        } else {
            $result = BlogModel::select(['id', 'title', 'created'])
                ->where("created", 'like', date($validParams['date']) . '%');
        }
        if (isset($params['category'])) {
            $result->whereIn('category_id', $validParams['category']);
        }
        $result->orderBy('created', 'desc');

        return $result->paginate(10)->withQueryString();
    }
}
