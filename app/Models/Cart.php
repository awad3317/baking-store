<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class Cart extends Model
{
    use HasFactory;

    // Note: Migration uses 'session_id' to store the cookie value.
    protected $fillable = ['session_id', 'user_id'];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * Retrieve the current user's cart based on the 'cart_id' cookie.
     */
    public static function myCart()
    {
        $cookieValue = Cookie::get('cart_id');
        
        if (!$cookieValue) {
            return null;
        }

        return self::where('session_id', $cookieValue)->first();
    }

    /**
     * Get real-time total count of items in the cart.
     */
    public static function totalItems()
    {
        $cart = self::myCart();

        if (!$cart) {
            return 0;
        }

        return $cart->items()->sum('quantity');
    }
}
