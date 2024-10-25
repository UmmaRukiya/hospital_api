<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineCat extends Model
{
    use HasFactory;
    protected $fillable=['medicine_cat_name', 'status'];
}
