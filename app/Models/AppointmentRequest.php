<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRequest extends Model
{
    use HasFactory;
    protected $fillable=[ 'department_id', 'doctor_id', 'patient_name', 'email', 'contact_no', 'gender', 'age', 'blood_id', 'app_day', 'app_date', 'session'];
}
