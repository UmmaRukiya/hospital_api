<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestList extends Model
{
    use HasFactory;
    protected $fillable=['inv_cat_id', 'invest_name', 'description', 'price', 'status'];

    /**
     * Get the user that owns the InvestList
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investcat()
    {
        return $this->belongsTo(InvestCat::class);
    }
}
