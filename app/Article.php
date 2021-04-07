<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'name', 'content', 'username', 'gmail', 'image','category_id','admin_id'
    ];
    function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    function comments()
    {
        return $this->hasMany(Comment::class, 'article_id');
    }
    function admin(){
        return $this->hasMany(Admin::class,'article_id');
    }

}
