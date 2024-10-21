<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=['role_id', 'name', 'email', 'contact', 'image', 'birth_date', 'gender', 'blood_id',  'present_address', 'permanent_address', 'status'];

    /**
     * Get the role that owns the Employe
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
