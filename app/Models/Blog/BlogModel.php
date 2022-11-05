<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = 'blog';
    public $timestamps = false;

    public function author()
    {
        return $this->hasOne(BlogAuthorModel::class, 'id', 'author_id');
    }

    public function comment()
    {
        return $this->hasMany(BlogCommentModel::class, 'blog_num', 'id');
    }
    public function category()
    {
        return $this->hasOne(BlogCategoryModel::class, 'id', 'category_id');
    }
}
