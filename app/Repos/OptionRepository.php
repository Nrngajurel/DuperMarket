<?php


namespace App\Repos;

use App\Option;
use Illuminate\Support\Arr;

class OptionRepository extends Repository
{

    public function __construct(Option $model)
    {
        parent::__construct($model);
    }


}
