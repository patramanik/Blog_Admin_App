<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';

    protected $fillable =[

        'category_id',
        'post_name',
        'mata_title',
        'image',
        'post_content'

    ];
}
