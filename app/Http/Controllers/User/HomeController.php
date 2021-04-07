<?php

namespace App\Http\Controllers\User;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {   $articles = Article::withCount(['comments'])->get();

        $category = DB::table('categories')->get();
//        $articles = DB::table('articles')->get();
        return view('Font-end.index', [
            'articles' => $articles, 'category' => $category
        ]);
    }
}
