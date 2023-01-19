<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'rfid',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}