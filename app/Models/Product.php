<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    public function category()
    {
        return $this->belongsTo('App\Models\Category','product_cate','cate_id');
    }
    protected $primaryKey = 'product_id';

}
