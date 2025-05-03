<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable=['enroll_num','batche_id','student_id','join_date','fee'];

//one to many with student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
//one to many with batche
    public function batche()
    {
        return $this->belongsTo(Batche::class);
    }

//one to many with enrollment which payments is many
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
