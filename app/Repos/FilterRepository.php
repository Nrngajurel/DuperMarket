<?php


namespace App\Repos;


use App\Brand;
use App\Components\DataFilters\BrandFilter;
use Illuminate\Support\Arr;

class FilterRepository extends Repository
{

    public function __construct(Brand $model, BrandFilter $filter)
    {
        parent::__construct($model, $filter);
    }


}
