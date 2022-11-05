<?php

namespace App\Repositories\Blog;

use App\Models\Blog\BlogModel;
use App\Contracts\Blog\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    public function getListBlogs()
    {
        $result = BlogModel::select(['id', 'title', 'created'])
            ->orderBy('created', 'desc')
            ->paginate(10)
            ->withQueryString();
        return $result;
    }

    public function update($data, $id)
    {
        BlogModel::where('id', $id)->update($data);
    }

    public function add($data)
    {
        $blog = new BlogModel();
        $blog->title = $data['title'];
        $blog->text = $data['text'];
        $blog->comment_id = 0;
        $blog->category_id = $data['category_id'];
        $blog->author_id = $data['author_id'];
        $blog->created = date("Y-m-d H:i:s");
        $blog->save();
        return $blog;
    }

    public function delete($id)
    {
        BlogModel::destroy($id);
    }
}
