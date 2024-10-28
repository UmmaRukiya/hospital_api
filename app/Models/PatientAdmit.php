<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAdmit extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'doctor_id', 'problem', 'admit_date', 'release_date', 'room_id', 'guardian', 'relation', 'condition'];

    /**
     * Get the Patient that owns the Patient_admit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function roomlist()
    {
        return $this->belongsTo(RoomList::class, 'room_id');
    }
}
