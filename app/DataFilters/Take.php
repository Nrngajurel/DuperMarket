<?php


namespace App\DataFilters;


use Illuminate\Http\Request;

class Take extends DataFilter
{

    protected function applydatafilter($builder)
    {
        request()->validate([
           'take'=>'integer'
        ]);
        return $builder->limit(request()->take);
    }

}
