<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Services\CategoryServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    protected $categoryServices;

    public function __construct(CategoryServices $categoryServices)
    {
        $this->categoryServices = $categoryServices;
    }

    function index()
    {

        $categories = $this->categoryServices->getAll();
        return view('backend.Category.list', compact('categories'));
    }

    function create()
    {
        return view('backend.Category.add');
    }

    function store(Request $request)
    {
        $this->categoryServices->store($request);
        return redirect()->route('store.categories');
    }

    function edit($id)
    {
        $categories = $this->categoryServices->getById($id);
        return view('backend.Category.edit', ['categories' => $categories]);
    }

    function update(Request $request, $id)
    {

        $this->categoryServices->update($request, $id);

        return redirect()->route('categories');
    }

    function delete($id)
    {
        $categories = $this->categoryServices->getById($id);
        $categories->delete();
        return back();
    }

    function category_articles($id)
    {
        $category = Category::all();
        $articles = Article::where('category_id', $id)->get();
        return view('user.articles.list_post', [
            'articles' => $articles, 'category' => $category
        ]);
    }
}
