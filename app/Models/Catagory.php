<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;

    protected $table = 'catagoris';

    protected $fillable =[
        'name',
        'mata_title',
        'image',
        'c_keywords',
        'meta_description',
        'status'
    ];
}
