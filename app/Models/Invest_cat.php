<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invest_cat extends Model
{
    use HasFactory;
    protected $fillable=['invset_cat_name', 'status'];
}
