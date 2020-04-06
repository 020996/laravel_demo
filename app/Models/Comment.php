<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';
    protected $primaryKey='id';
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo('App\Models\Product','com_product','product_id');
    }
}
