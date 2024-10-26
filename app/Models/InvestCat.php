<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestCat extends Model
{
    use HasFactory;
    protected $fillable=['invest_cat_name', 'status'];
}
