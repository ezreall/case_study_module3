<?php


namespace App\Http\Repository;


use App\Category;

class CategoryRepository
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    function getAll()
    {
     return  $this->category->all();
    }

    function findById($id)
    {
        return Category::findOrFail($id);
    }

    function store($categories)
    {
        $categories->save();
    }


}
