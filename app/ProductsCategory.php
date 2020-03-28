<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsCategory extends Model {
    protected $table = "products_category";
    protected $primaryKey = 'cat_id';

    public function products() {
        return $this->belongsTo( Products::class, 'cat_id' );
    }
}
