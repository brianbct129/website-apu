<?php

namespace Lunar\Base;

use Closure;
use Lunar\Models\Cart;
use Lunar\Models\Order;

abstract class OrderModifier
{
    public function creating(Cart $cart, Closure $next): Cart
    {
        return $next($cart);
    }

    public function created(Order $order, Closure $next): Order
    {
        return $next($order);
    }
}
