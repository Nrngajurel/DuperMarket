<?php


namespace App\Components\Shop;


class Cart
{
    protected static function resolveFacade($name)
    {
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        return (self::resolveFacade('Cart'))
            ->$method(...$arguments);
    }

}
