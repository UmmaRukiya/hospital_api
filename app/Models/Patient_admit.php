<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_admit extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'father_name', 'mother_name', 'husband_name', 'marital_status', 'doctor_ref', 'problem', 'admit_date', 'release_date', 'room_id', 'guardian', 'relation', 'condition', 'status'];

    /**
     * Get the Patient that owns the Patient_admit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
