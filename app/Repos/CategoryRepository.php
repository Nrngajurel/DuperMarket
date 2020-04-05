<?php


namespace App\Repos;


use App\Category;

class CategoryRepository  extends Repository
{
public function __construct(Category $model)
{
    parent::__construct($model);
}
}
