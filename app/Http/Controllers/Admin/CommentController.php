<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\CommentServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    protected $commentServices;

    public function __construct(CommentServices $commentServices)
    {
        $this->commentServices = $commentServices;
    }

    function store(Request $request)
    {
        $this->commentServices->store($request);
        return back();
    }}
