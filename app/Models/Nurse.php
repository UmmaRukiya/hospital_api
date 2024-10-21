<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    protected $fillable=['role_id', 'name_en', 'name_bn', 'email', 'contact_no_en', 'gender', 'birth_date', 'blood_id', 'image', 'present_address', 'permanent_address', 'status'];

    /**
     * Get the user that owns the Nurse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function blood()
    {
        return $this->belongsTo(Blood::class);
    }
}
