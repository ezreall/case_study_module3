<?php


namespace App\Http\Repository;


use App\Article;
use App\Http\Services\BaseServices;

class ArticleRepository extends BaseServices
{
    function getAll()
    {
        return Article::all();
    }

    function findById($id)
    {
        return Article::findOrFail($id);
    }

    function store($articles){
        $articles->save();
    }

}
