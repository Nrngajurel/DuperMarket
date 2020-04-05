<?php


namespace App\Repos;


use App\Tag;

class TagRepository extends Repository
{
public function __construct(Tag $model)
{
    parent::__construct($model);
}
}
