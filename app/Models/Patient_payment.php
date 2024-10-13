<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_payment extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'date', 'admit_id', 'amount'];
}
