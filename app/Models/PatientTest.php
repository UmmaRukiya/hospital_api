<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PatientTest extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'admit_id', 'test_date' ,'sub_price', 'vat', 'discount', 'total_amount', 'paid'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function patientadmit(): BelongsTo
    {
        return $this->belongsTo(PatientAdmit::class,'admit_id');
    }
    public function investlist(): BelongsTo
    {
        return $this->belongsTo(InvestList::class);
    }

    // Define the relationship to the PatientTestDetail model
    public function details()
    {
        return $this->hasMany(PatientTestDetail::class)->with('investlist');
    }
}
