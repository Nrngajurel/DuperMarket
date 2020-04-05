<?php


namespace App\Repos;


use App\Brand;
use App\Components\DataFilters\BrandFilter;

class BrandRepository extends Repository
{

    public function __construct(Brand $model, BrandFilter $brandFilter)
    {
        parent::__construct($model, $brandFilter);
    }



}
