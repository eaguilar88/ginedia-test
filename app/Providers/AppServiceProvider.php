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
        View::share(['agent' => $detect, 'categories' => $categories]);
    }
}
