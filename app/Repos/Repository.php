<?php
namespace App\Repos;

use App\Components\DataFilters\DataFilter;
use Illuminate\Database\Eloquent\Model;

class Repository
{
    protected $model;
    /**
     * @var DataFilter
     */
    protected $filter;
    protected $relations=[];

    public function __construct(Model $model,  DataFilter $filter)
    {
        $this->model= $model;
        $this->filter = $filter;
    }

    public function insert( array $data)
    {
        if (is_assoc($data)){
            return $this->model->create($data);
        }else{
            return $this->model->insert($data);
        }
    }

    public function relations(array $relations)
    {
        return $this->relations=$relations;

    }
    public function search(array $criteria=[])
    {
        $this->filter->setBuilder($this->model->with($this->relations));
        $this->filter->setCriteria($criteria);
        $this->filter->buildQuery();
        return $this->filter;

    }

}
