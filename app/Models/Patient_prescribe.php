<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_prescribe extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'cc', 'inv_list_id', 'advice', 'status'];
}
