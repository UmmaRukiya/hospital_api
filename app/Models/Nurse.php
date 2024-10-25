<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    protected $fillable=['role_id', 'name', 'email', 'contact', 'gender', 'birth_date', 'blood_id', 'image', 'present_address', 'permanent_address'];

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
