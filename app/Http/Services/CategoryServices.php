<?php


namespace App\Http\Services;


use App\Category;
use App\Http\Repository\CategoryRepository;
use http\Env\Request;

class CategoryServices extends BaseServices
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    function getAll()
    {
        return $this->categoryRepo->getAll();
    }

    function getById($id)
    {
        return $this->categoryRepo->findById($id);
    }

    function store($request)
    {

        $categories = new Category();
        $categories->fill($request->all());
        $this->categoryRepo->store($categories);
    }
    function update($request,$id){
        $categories=$this->categoryRepo->findById($id);
        $categories->fill($request->all());
        $this->categoryRepo->store($categories);
    }
}
