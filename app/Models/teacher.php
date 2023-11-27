<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    public function students(){
        return $this->belongsToMany(student::class, "student_teachers");
    }

    public function matters(){
        return $this->belongsToMany(matter::class, "teacher_matters");
    }
}
