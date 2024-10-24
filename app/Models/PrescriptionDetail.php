<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionDetail extends Model
{
    use HasFactory;
    protected $fillable=['prescription_id', 'medicine_id', 'dosage', 'duration', 'disease'];
}
