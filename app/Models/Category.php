<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    public $fillable = [
        'name', 'slug', 'status'
    ];

    public function productType(){
        return $this->hasMany('App/Models/ProductType', 'idCategory', 'id');
    }

}
