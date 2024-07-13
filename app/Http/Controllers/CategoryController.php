<?php

namespace App\Http\Controllers;

use App\Core\View;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryController
{
    public function categores()
    {
        $categores = Category::all();
        $categoryList = (new CategoryService($categores))->getCategoryByDesc();
        return View::run('categores',$categoryList);
    }

    public function items()
    {
        $categores = Category::all();
        $items = (new CategoryService($categores))->buildCategoryTreeWithTotalItems();
        return View::run('items',$items);
    }

    public function test()
    {
        $categores = Category::all();
        $items = (new CategoryService($categores))->buildCategoryTreeWithTotalItems();
        echo json_encode($items, JSON_PRETTY_PRINT);
    }
}