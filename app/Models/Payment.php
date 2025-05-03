<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=['amount','paid_date','enrollment_id'];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
