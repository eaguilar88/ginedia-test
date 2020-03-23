<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Propaganistas\LaravelFakeId\RoutesWithFakeIds;

class Category extends Model
{
    use RoutesWithFakeIds;

    /**
     * Subcategory 1 -N relationship
     *
     * @return HasMany
     */
    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }

    /**
     * Product 1 -N relationship through Subcategory
     *
     * @return HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\Subcategory');
    }

    /**
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return action('CategoryController@show', [$this->id, $this->slug]);
    }
}
