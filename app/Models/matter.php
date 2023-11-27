<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matter extends Model
{
    use HasFactory;

    public function students(){
        return $this->belongsToMany(student::class, "student_matters");
    }

    public function teachers(){
        return $this->belongsToMany(teacher::class, "teacher_matters");
    }
}
