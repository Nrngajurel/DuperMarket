<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable =['name', 'slug','type'];

    public function options()
    {
        $this->hasMany(Option::class);
    }


}
