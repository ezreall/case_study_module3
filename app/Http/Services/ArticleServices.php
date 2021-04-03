<?php


namespace App\Http\Services;


use App\Article;
use App\Http\Repository\ArticleRepository;
use Illuminate\Support\Facades\Storage;

class ArticleServices extends BaseServices
{
    protected $articlesRepo;

    public function __construct(ArticleRepository $articlesRepo)
    {
        $this->articlesRepo = $articlesRepo;
    }

    function getById($id)
    {
        return $this->articlesRepo->findById($id);
    }
    function getAll(){
        return $this->articlesRepo->getAll();
    }

    function store($request)
    {
        $articles = new Article();
        $articles->fill($request->all());
//        dd($request->content);
        $path = $this->updateLoadFile($request, 'image', 'backend');
        $articles->image = $path;

        $this->articlesRepo->store($articles);

    }

    function update($request, $id)
    {
        $articles = $this->articlesRepo->findById($id);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($articles->image_articles);
            $path = $this->updateLoadFile($request, 'image', 'backend');
            $articles->image = $path;
        }
        $articles->fill($request->all());

        $this->articlesRepo->store($articles);
    }

}
