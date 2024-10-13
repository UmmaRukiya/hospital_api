<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_test_detail extends Model
{
    use HasFactory;
    protected $fillable=['patient_test_id', 'inv_list_id', 'amount'];
}
