<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'employ_id', 'app_date', 'serial', 'problem', 'approve', 'status'];
}
