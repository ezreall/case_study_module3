<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Comment;
use App\Http\Services\ArticleServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    protected $articleServices;

    public function __construct(ArticleServices $articleServices)
    {
        $this->articleServices = $articleServices;
    }
    function index(){

        $articles = Article::withCount(['comments'])->get();
        return view('backend.Article.list',[
            'articles'=>$articles
        ]);

    }
    function create()
    {
        $categories = category::all();
        return view('backend.Article.add', [
            'categories' => $categories
        ]);
    }
    function store(Request $request)
    {
        $this->articleServices->store($request);
        return redirect()->route('articles');
    }

    function edit($id)
    {
        $categories = Category::all();
        $articles = $this->articleServices->getById($id);
        return view('backend.Article.edit', [
            'articles' => $articles, 'categories' => $categories
        ]);
    }


    function update(Request $request, $id)
    {
        $this->articleServices->update($request, $id);
        return redirect()->route('articles');
    }
    function delete($id)
    {
        $articles = $this->articleServices->getById($id);
        Storage::disk('public')->delete($articles->image);
        $articles->delete();
        return redirect()->route('articles');
    }
    function detail($id)
    {
        $category = category::all();
        $article = $this->articleServices->getById($id);
        $comments = Comment::where('article_id', $article->id)->get();
        return view('font-end.articles.detail', [
            'article' => $article, 'category' => $category, 'comments' => $comments]);
    }

}
