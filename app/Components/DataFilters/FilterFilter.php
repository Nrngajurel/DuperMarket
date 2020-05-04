<?php


namespace App\Components\DataFilters;

class FilterFilter extends DataFilter
{

    public function query($key, $value)
    {
        $this->builder->where('name','like','%'.$value.'%');

    }


    public function defaultMethod($key, $value)
    {

    }
}
