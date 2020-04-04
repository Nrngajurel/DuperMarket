<?php


namespace App\Repos;


use Illuminate\Database\Eloquent\Model;

class BrandRepository extends Repository
{

    public function __construct(Model $model)
    {
        parent::__construct($model);
    }


}
