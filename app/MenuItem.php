<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function parent_menu()
    {
        return $this->belongsTo(MenuItem::class,'parent_id');
    }
    public function child_menus()
    {
        return $this->hasMany(MenuItem::class,'parent_id');
    }
}
