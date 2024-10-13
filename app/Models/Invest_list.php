<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invest_list extends Model
{
    use HasFactory;
    protected $fillable=['inv_cat_id', 'invset_name', 'description', 'price', 'status'];
}
