<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'user_id',
        'tag_id',
        'access_granted',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
