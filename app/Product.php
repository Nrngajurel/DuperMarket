<?php

namespace App;

use App\DataFilters\Take;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Product extends Model
{
    //


    public static function getAll()
    {
        $user= app(Pipeline::class)
            ->send(Product::query())
            ->through([
                Take::class,
            ])
            ->thenReturn()
            ->get();
        return $user;

    }

}
