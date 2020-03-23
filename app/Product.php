<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /**
     * Subcategory 1 -N relationship
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Subcategory');
    }
}
