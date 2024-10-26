<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable=['medicine_cat_id', 'medicine_name', 'dosage'];

    /**
     * Get the user that owns the Medicine
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicinecat()
    {
        return $this->belongsTo(MedicineCat::class);
    }
}
