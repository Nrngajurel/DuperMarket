<?php


namespace App\Components\DataFilters;


class BrandFilter extends DataFilter
{
    protected $sortingMethods=[
        'newest'=>'sort_by_newest',
    ];
    public function q($key, $value)
    {
        $this->builder->where('name','like','%'.$value.'%');

    }

    public function defaultMethod($key, $value)
    {

    }
}
