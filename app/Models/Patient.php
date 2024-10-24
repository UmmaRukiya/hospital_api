<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'contact',  'birth_date', 'gender', 'blood_id', 'present_address', 'permanent_address', 'status'];

    /**
     * Get the user that owns the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blood()
    {
        return $this->belongsTo(Blood::class);
    }
}
