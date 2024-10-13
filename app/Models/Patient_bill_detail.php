<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_bill_detail extends Model
{
    use HasFactory;
    protected $fillable=['patient_bill_id', 'particular', 'amount'];

    /**
     * Get the Patient that owns the Patient_bill_detail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
