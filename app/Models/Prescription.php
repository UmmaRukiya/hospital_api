<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable=['doctor_id', 'patient_id', 'age', 'temp', 'weight', 'bp', 'cc', 'inv', 'mh', 'de', 'advice', 'follow_up'];
}
