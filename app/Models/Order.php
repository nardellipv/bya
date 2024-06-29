<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'total',
    ];

    // Relación con `User`
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Relación con `OrderItem`
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
