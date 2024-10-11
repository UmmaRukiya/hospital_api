<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'name_en', 'name_bn', 'email', 'contact_no_en', 'contact_no_bn', 'present_address', 'permanent_address', 'image', 'birth_date', 'gender', 'blood_id', 'status'];
}
