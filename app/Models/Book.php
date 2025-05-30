<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [ 'title' , 'content' , 'cover' , 'author_id' , 'category_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
