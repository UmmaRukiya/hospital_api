<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_cat extends Model
{
    use HasFactory;
    protected $fillable=['room_cat_name', 'status'];
}
