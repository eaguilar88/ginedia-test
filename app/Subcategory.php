<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subcategory extends Model
{
    /**
     * Category 1 -N relationship
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Product 1 -N relationship
     *
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
