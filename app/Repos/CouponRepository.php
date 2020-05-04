<?php


namespace App\Repos;


use App\Components\DataFilters\CouponFilter;
use App\Coupon;
use Illuminate\Database\Eloquent\Model;

class CouponRepository extends Repository
{
    public function __construct(Coupon $model, CouponFilter $filter)
    {
        parent::__construct($model, $filter);
    }

}
