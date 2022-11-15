<?php

namespace App\Traits;

use App\Models\Cart;
use App\Models\Order as ItemOrder;

trait HasOrder
{
    function placeOrder($orders, $cart_ids)
    {
        ItemOrder::insert($orders);

        //delete cart
        $this->deleteCarts($cart_ids);
    }


    private function deleteCarts($cart_ids)
    {
        Cart::whereIn('id', $cart_ids)
            ->where('user_id', $this->id)
            ->delete();
    }
}
