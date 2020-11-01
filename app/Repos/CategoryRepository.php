<?php


namespace App\Repos;


use App\Category;
use App\Components\DataFilters\CategoryFilter;

class CategoryRepository  extends Repository
{
    public function __construct(Category $model, CategoryFilter $filter)
    {
        parent::__construct($model,$filter);
    }
}
