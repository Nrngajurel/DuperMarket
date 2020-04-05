<?php


namespace App\Repos;


use App\User;

class UserRepository extends Repository
{public function __construct(User $model)
{
    parent::__construct($model);
}
}
