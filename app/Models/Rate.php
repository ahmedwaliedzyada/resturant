<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = ['amount', 'comment', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
