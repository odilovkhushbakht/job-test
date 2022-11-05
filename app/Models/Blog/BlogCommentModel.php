<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentModel extends Model
{
    use HasFactory;
    protected $table = 'blog_comment';
    public $timestamps = false;
}
