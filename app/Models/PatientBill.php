<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientBill extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'sub_amount', 'discount', 'tax', 'total_amount', 'bill_date'];

    /**
     * Get the patient that owns the PatientBill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
