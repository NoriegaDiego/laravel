<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'category_id', 'description', 'posted', 'image'];

    function category(){
        return $this->belongsTo(Category::class);
    }
}
