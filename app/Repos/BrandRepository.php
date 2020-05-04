<?php


namespace App\Repos;


use App\Brand;
use App\Components\DataFilters\BrandFilter;
use Illuminate\Support\Arr;

class BrandRepository extends Repository
{

    public function __construct(Brand $model, BrandFilter $filter)
    {
        parent::__construct($model, $filter);
    }
    public function insert(array $data)
    {
        dd($data->image);
        if (Arr::isAssoc($data)){
            return $this->model->create($data);
        }else{
            return $this->model->insert($data);
        }
    }


}
