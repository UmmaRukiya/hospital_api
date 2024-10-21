<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment_request extends Model
{
    use HasFactory;
    protected $fillable=['department_id', 'doctor_id', 'patient_name', 'email', 'phone', 'gender', 'blood_id', 'details', 'app_date', 'status'];
}
