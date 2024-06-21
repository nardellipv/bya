<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'discounted_price',
        'is_on_sale',
        'image_url',
    ];

    // Relación con `CartItem`
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    // Relación con `OrderItem`
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
