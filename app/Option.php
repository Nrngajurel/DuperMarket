<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable =['key','value','filter_id'];


    public function filter()
    {
        $this->belongsTo(Filter::class);
    }
}
