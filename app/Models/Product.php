<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';

    public function Category(){
        return $this->belongsTo('App/Models/Category', 'idCategory', 'id');
    }

    public function ProductType(){
        return $this->belongsTo('App/Models/ProductType', 'idProductType', 'id');
    }

}
