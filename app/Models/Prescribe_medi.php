<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescribe_medi extends Model
{
    use HasFactory;
    protected $fillable=['prescribe_id', 'medicine_cat_id', 'medi_name', 'dose'];
}
