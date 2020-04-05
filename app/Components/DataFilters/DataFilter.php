<?php


namespace App\Components\DataFilters;
use Illuminate\Database\Eloquent\Builder;

abstract  class DataFilter
{
    protected $builder;
    protected $nutral_params= [];
    protected $per_page;
    protected $default_per_page = 30;
    protected $max_per_page = 50;
    protected $sortingMethods=[];

    public function setBuilder(Builder $builder)
    {
        return $this->builder = $builder;
    }
    public function buildQuery()
    {
        foreach (app('request')->query() as $key=> $value){
            if (!empty($value)){
                if(method_exists($this, $key)){
                    call_user_func_array([$this,$key],[$key,$value]);
                }elseif ($this->nutral_params[$key]){
                    call_user_func_array([$this, "defaultMethod"],[$key,$value]);
                }

            }
        }
    }

    public function getData(){

    $this->per_page('per_page',$this->default_per_page);
    $paginator= $this->builder->paginate($this->per_page);
    $paginator->appends(app('request')->query());
    return $paginator;
    }
    public function per_page($key, $value)
    {
        if(empty($this->per_page)){
            $this->$key= $value<= $this->max_per_page?$value:$this->max_per_page;
        }

    }

    public function sort($key,$value)
    {

    }
    public function setCriteria(array $criteria=[])
    {
        foreach ($criteria as $methodName => $value){
            if(method_exists($methodName)){
                call_user_func_array([$this,$methodName],[$methodName,$value]);
            }
        }

    }
    public abstract function defaultMethod($key,$value);

}
