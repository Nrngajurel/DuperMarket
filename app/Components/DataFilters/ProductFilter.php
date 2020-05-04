<?php


namespace App\Components\DataFilters;


class ProductFilter extends DataFilter
{
    protected $sortingMethods=[
        'newest'=>'sort_by_newest',
    ];
    public function query($key, $value)
    {
        $this->builder->where('name','like','%'.$value.'%');

    }

    public function category($key, $value)
    {
        $this->builder->with('categories')->whereHas('categories', function ($query) use ($value){
            $query->where('key',$value);
        });
    }
    public function tag($key, $value)
    {
        $this->builder->with('tags')->whereHas('tags', function ($query) use ($value){
            $query->where('key',$value);
        });
    }


    public function defaultMethod($key, $value)
    {

    }
}
