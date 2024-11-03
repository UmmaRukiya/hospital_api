<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable=['doctor_id', 'patient_id', 'age', 'temp', 'weight', 'bp', 'cc', 'inv', 'mh', 'de', 'advice', 'follow_up', 'issue_date'];
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function details()
    {
        return $this->hasMany(PrescriptionDetail::class,'prescription_id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
