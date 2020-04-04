<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\Repository;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
     * @return \Illuminate\Contracts\View\Factory|View
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
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function show(Category $category, Subcategory $subcategory)
    {
        $products = $subcategory->products;
        $products->each(function ($product) {
            $product->finish = $this->getFinish($product->finish);
        });
        return view('subcategories.show', ['category' => $category, 'subcategory' => $subcategory, 'products' => $products]);
    }

    protected
    function getFinish($value)
    {
        switch ($value) {
            case "1":
                return "pulido";
            case "2":
                return "satinado";
            case "3":
                return "pulido o satinado";
            case "4":
                return "pulido y satinado";
            case "5":
                return "dual pulido/satinado";
            default:
                return "";
        }
    }
}
