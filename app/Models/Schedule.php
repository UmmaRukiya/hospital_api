<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable=[ 'employe_id', 'day_id', 'shift_id'];

    /**
     * Get the user that owns the Schedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
    public function day()
    {
        return $this->belongsTo(Day::class);
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
}
