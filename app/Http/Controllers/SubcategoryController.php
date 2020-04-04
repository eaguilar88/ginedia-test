<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\Repository;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    protected $model;

    public function __construct(Subcategory $subcategory)
    {
        $this->model = new Repository($subcategory);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = $this->model->findAll(['products']);
        return view('subcategories.show', ['subcategories' => $subcategories]);
    }

    /**
     * Display the specified resource.
     *
     * @param Subcategory $subcategory
     * @return void
     */
    public function show(Category $category, Subcategory $subcategory)
    {
        $products = $subcategory->products();
        return view('subcategories.show', ['category', $category]);
    }
}
