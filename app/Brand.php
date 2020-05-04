<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    protected $guarded=[];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
