<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'content', 'article_id'];

    function article()
    {
        return $this->belongsTo(article::class, 'article_id');
    }
}
