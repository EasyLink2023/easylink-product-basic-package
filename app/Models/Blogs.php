<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = ['meta_title', 'meta_description', 'meta_keyword','cover_image', 'tags', 'title', 'slug' ,'content', 'created_by', 'is_active'];

}
