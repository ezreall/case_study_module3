<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $category = DB::table('categories')->get();
        $articles = DB::table('articles')->get();
        return view('font-end.index', [
            'articles' => $articles, 'category' => $category
        ]);
    }}
