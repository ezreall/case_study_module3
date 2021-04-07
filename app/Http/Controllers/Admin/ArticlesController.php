<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Article;
use App\Category;
use App\Comment;
use App\Http\Services\AccountServices;
use App\Http\Services\ArticleServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    protected $articleServices;
    protected $accountServices;
    public function __construct(ArticleServices $articleServices,AccountServices $accountServices)
    {
        $this->articleServices = $articleServices;
        $this->adminServices=$accountServices;
    }

    function index()
    {

        $articles = Article::withCount(['comments'])->get();
        return view('backend.Article.list', [
            'articles' => $articles
        ]);

    }

    function create()
    {
        $categories = Category::all();
        return view('backend.Article.add', [
            'categories' => $categories
        ]);
    }

    function store(Request $request)
    {
        $this->articleServices->store($request);
        return redirect()->route('articles')->with('message','Them moi thanh cong');
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
//        dd($request->image);
        return redirect()->route('articles')->with('message','Cap nhat thanh cong');
    }

    function delete($id)
    {
        $articles = $this->articleServices->getById($id);
        $articles->comments()->delete();
        Storage::disk('public')->delete($articles->image);
        $articles->delete();
        return redirect()->route('articles')->with('error','Xoa thanh cong');
    }

    function detail($id)
    {
        $category = category::all();
        $article = $this->articleServices->getById($id);
        $comments = Comment::where('article_id', $article->id)->get();
        return view('Font-end.Article.detailed_article', [
            'article' => $article, 'category' => $category, 'comments' => $comments]);
    }

}
