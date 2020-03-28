<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsInfo extends Model {
    protected $table = "products_info";
    protected $primaryKey = 'id';

    public function productsName() {
        return $this->belongsTo( Products::class, 'p_id' );
    }

    public function productsCat() {
        return $this->belongsTo( ProductsCategory::class, 'cat_id' );
    }
}
