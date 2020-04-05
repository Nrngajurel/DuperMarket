<?php


namespace App\Repos;


use App\Product;

class ProductRepository extends Repository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}
