<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomList extends Model
{
    use HasFactory;
    protected $fillable=['room_cat_id', 'room_no', 'floor_no', 'description', 'capacity', 'price', 'status'];

    /**
     * Get the room_cat that owns the Room_list
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room_cat()
    {
        return $this->belongsTo(RoomCat::class);
    }
}
