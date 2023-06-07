<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schedule_id',
        'name',
        'user_id',
        'start_time',
        'end_time',
        'laboratory',
        'school_year',
        'semester',
        'recurrence',
        'recurrence_value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the user that owns the schedule.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // following are for the schedule relationships, mainly used for the reoccuring schedules
    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'schedule_id', 'id');
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

    // /**
    //  * Get the laboratory that the schedule belongs to.
    //  */
    // public function laboratory()
    // {
    //     return $this->belongsTo(Laboratory::class);
    // }
}
