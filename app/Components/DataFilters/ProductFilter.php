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

    public function categories($key, $value)
    {
        $this->builder->with('categories')->whereHas('categories', function ($query) use ($value){
            if(is_array($value)){
                    $query->whereIn('key',$value);

            }else{
                $query->where('key',$value);
            }
        });
    }
    public function tag($key, $value)
    {
        $this->builder->with('tags')->whereHas('tags', function ($query) use ($value){
            if(is_array($value)){
                $query->whereIn('key',$value);

            }else{
                $query->where('key',$value);
            }
        });
    }


    public function defaultMethod($key, $value)
    {

    }
}
