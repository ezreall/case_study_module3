<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowAllBlogController extends Controller
{
    function ShowListAll(){
        $categories=Category::paginate(5);
        $articles = Article::withCount(['comments'])->paginate(2);
        return view('backend.index',[
            'articles'=>$articles,
            'categories'=>$categories
        ]);
    }
}
