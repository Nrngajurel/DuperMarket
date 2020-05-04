<?php


namespace App\Components\DataFilters;


use Illuminate\Support\Arr;

class BrandFilter extends DataFilter
{

    public function query($key, $value)
    {
        $this->builder->where('name','like','%'.$value.'%');

    }


    public function defaultMethod($key, $value)
    {

    }
}
