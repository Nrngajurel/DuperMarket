<?php


namespace App\Repos;


use App\Components\DataFilters\ProductFilter;
use App\Product;

class ProductRepository extends Repository
{
    public function __construct(Product $model, ProductFilter $filter)
    {
        parent::__construct($model, $filter);
    }


}
