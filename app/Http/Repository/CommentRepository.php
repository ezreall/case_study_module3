<?php


namespace App\Http\Repository;


use App\Comment;

class CommentRepository
{
    function getAll(){
        return Comment::all();
    }

    function store($comments){
        $comments->save();
//            dd($comments);
    }
}
