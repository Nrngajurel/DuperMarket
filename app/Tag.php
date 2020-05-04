<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded=[];


    public function products()
    {
        return $this->morphedByMany(Product::class,'taggables');
    }
}
