<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=['name','address','mobile'];
//one to many with enrollment which student is one
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
