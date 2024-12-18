<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientTestDetail extends Model
{
    use HasFactory;
    protected $fillable=['patient_test_id', 'inv_list_id', 'amount'];
    public function investlist()
    {
        return $this->belongsTo(InvestList::class,'inv_list_id');
    }
    // public function test()
    // {
    //     return $this->belongsTo(PatientTest::class,'patient_test_id');
    // }
}
