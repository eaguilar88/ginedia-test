<?php

namespace App\Providers;

use App\Category;
use App\MobileDetect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $detect = new MobileDetect();
        $categories =  Category::with('subcategories')->get();
        $blackList = array("Accesorios", "para", "de");
        foreach ($categories as $category) {
            if( $category-> name != "Sistemas de puertas"){
                $category->name = str_replace($blackList,"",$category->name);
            }
        }
        View::share(['agent' => $detect, 'categoriesMobile' => $categories]);
    }
}
