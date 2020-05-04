<?php


namespace App\Components\Shop;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CartService
{


    public function add($id, $qty = null, $price = null, array $options = [])
    {
        session()->put('rowId',[$this->generateRowId($id, $options)=>[
            'id'=>$id,
            'quantity'=>$qty,
            'price'=>$price,
            'options'=>$options,
        ]]);
        return;
    }

    public function update($rowId, $qty)
    {

    }

    protected function generateRowId($id, array $options)
    {
        ksort($options);

        return md5($id . serialize($options));
    }

}
