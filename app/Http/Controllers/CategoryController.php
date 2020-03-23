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
     * @param int $id
     * @param Optimus $optimus
     * @param string $slug
     * @return Factory|View
     */
    public function show(int $id, $slug = "")
    {
        $category = $this->model->findOne($id);
//        if ($slug != $category->slug) {
//            return redirect()->to($category->url);
//        }
        return view('categories.show', ['category', $category]);
    }

}
