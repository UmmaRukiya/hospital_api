<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_list extends Model
{
    use HasFactory;
    protected $fillable=['room_cat_id', 'room_no', 'floor_no', 'description', 'capacity', 'price', 'status'];
}
