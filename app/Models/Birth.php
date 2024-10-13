<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{
    use HasFactory;
    protected $fillable=['patient_id', 'title', 'birth_date', 'gender', 'description', 'doc_ref', 'status'];
}
