<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author_id','description', 'pages', 'price'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
