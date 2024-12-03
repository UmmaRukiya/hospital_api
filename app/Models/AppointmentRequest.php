<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRequest extends Model
{
    use HasFactory;
    protected $fillable=[ 'department_id', 'doctor_id', 'patient_name', 'email', 'patient_contact', 'gender', 'age', 'blood_id', 'app_day', 'app_date', 'session'];

    /**
     * Get the user that owns the AppointmentRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'app_day');
    }
}
