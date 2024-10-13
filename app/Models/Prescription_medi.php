<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription_medi extends Model
{
    use HasFactory;
    protected $fillable=['prescription_id', 'medi_name', 'type', 'dose', 'note', 'duration', 'status'];
}
