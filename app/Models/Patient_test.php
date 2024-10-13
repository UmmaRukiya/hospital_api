<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_test extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'sub_price', 'vat', 'discount', 'total_amount', 'paid', 'admit_id', 'status'];
}
