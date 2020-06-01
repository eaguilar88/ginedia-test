<?php

use Illuminate\Database\Seeder;

class ProductsImagePathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = App\Product::all();
        foreach ($products as $product) {
            $subcategory = App\Subcategory::find($product->subcategory_id);
            $category = $subcategory->category()->get();
            $product->image_path = "storage/images/" . $subcategory->category->slug . "/$subcategory->slug/"
                . str_replace(" ", "-", $product->code) . ".jpg";
            $product->save();
        }
    }
}
