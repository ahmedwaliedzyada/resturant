<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'answer', 'replied_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
