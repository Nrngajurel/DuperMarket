<?php


namespace App\DataFilters;


use Closure;
use Illuminate\Support\Str;

abstract class DataFilter
{
    public function handle($request, Closure $next){

        if(!request()->has($this->filterName())){
            return $next($request);
        }
        $builder = $next($request);
        return $this->applydatafilter($builder);

    }
    protected abstract function applydatafilter($builder);
    protected function filterName(){
        return Str::snake(class_basename($this));
    }

}
