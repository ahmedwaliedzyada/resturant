<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['product_id', 'user_id'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
