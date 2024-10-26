<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCat extends Model
{
    use HasFactory;
    protected $fillable=['room_cat_name', 'description', 'price'];
}
