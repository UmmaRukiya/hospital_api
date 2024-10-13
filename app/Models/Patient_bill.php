<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_bill extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'sub_amount', 'discount', 'tax', 'total_amount', 'date'];
}
