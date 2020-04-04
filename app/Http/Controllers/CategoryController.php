<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Jenssegers\Optimus\Optimus;
use App\Repositories\Repository;
use Illuminate\Contracts\View\Factory;

class CategoryController extends Controller
{
    protected $model;

    public function __construct(Category $category)
    {
        $this->model = new Repository($category);
    }

    /**
     * Display a listing of the resource.
     * Uses Repository method findAll
     * Receives an array with the relationships we want to fetch along the resources
     *
     * @return Factory|View
     */
    public function index()
    {
        $categories = $this->model->findAll(['subcategories']);
        return view('welcome', ['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Factory|View
     */
    public function show(Category $category)
    {
        $subcategories = $category->subcategories;
        return view('categories.show', ['category', $category, 'subcategories' => $subcategories]);
    }

    function x()
    {
        $categories = App\Category::with('subcategories')->get();
        foreach ($categories as $category) {
            $path = "public/images/$category->slug/";
            foreach ($category->subcategories as $subcategory) {
                \Storage::makeDirectory($path.$subcategory->slug);
            }
        }
    }

}
