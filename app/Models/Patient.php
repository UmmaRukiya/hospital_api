<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=['name',  'father_name', 'mother_name', 'husband_name', 'marital_status', 'email', 'contact',  'birth_date', 'gender', 'blood_id', 'present_address', 'permanent_address'];

    /**
     * Get the user that owns the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blood()
    {
        return $this->belongsTo(Blood::class);
    }

    public function bills(): HasMany
    {
        return $this->hasMany(PatientBill::class);
    }
}
