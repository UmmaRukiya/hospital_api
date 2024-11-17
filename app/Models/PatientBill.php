<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PatientBill extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'admit_id', 'sub_amount', 'discount', 'tax', 'total_amount','pay', 'bill_date'];

    /**
     * Get the patient that owns the PatientBill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function patientadmit(): BelongsTo
    {
        return $this->belongsTo(PatientAdmit::class,'admit_id');
    }

    // Define the relationship to the PatientBillDetail model
    public function details()
    {
        return $this->hasMany(PatientBillDetail::class, 'patient_bill_id');
    }
}
