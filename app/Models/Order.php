<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'billing_address', 'billing_phone','billing_email', 'total', 'payment_method', 'payment_status', 'order_status',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
