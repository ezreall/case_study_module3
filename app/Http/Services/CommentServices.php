<?php


namespace App\Http\Services;


use App\Comment;
use App\Http\Repository\CommentRepository;

class CommentServices
{
    protected $commentRepo;

    public function __construct(CommentRepository $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    function store($request)
    {
        $comments = new Comment();
        $comments->fill($request->all());
        $this->commentRepo->store($comments);
    }
}
