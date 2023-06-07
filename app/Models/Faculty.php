<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $table = 'faculties';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'role',
        'tag_id',

    ];
}
