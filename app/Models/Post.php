<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';

    protected $fillable =[
        'post_id',
        'category_id',
        'post_name',
        'meta_title',
        'image',
        'Post_keywords',
        'post_content',
        'status'

    ];
}
