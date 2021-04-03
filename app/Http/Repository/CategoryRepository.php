<?php


namespace App\Http\Repository;


use App\Category;

class CategoryRepository
{
    function getAll()
    {
//        return Category::paginate(3);
        return Category::all();
    }

    function findById($id){
        return Category::findOrFail($id);
    }
    function store($categories){
            $categories->save();
        }


}
