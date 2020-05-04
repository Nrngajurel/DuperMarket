<?php


namespace App\Components\Shop;


class CartItem
{
    private $productId;
    /**
     * @var int
     */
    private $qty;

    public function __construct($productId, $qty= 1)
    {
        $this->productId = $productId;
        $this->qty = $qty;
    }


}
