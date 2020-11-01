<?php

namespace App;

use App\Components\Scopes\Latest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $guarded =[];
//    protected $primaryKey='uuid';


    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
    public function categories()
    {
        return $this->morphToMany(Category::class,'categoriable');
    }

    public function scopeMostPopular()
    {
        $this->inRandomOrder();
    }


    protected static function boot()
    {
        parent::boot();
//        static::addGlobalScope(new Latest());
    }
}
