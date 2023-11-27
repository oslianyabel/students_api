<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    public function matters(){
        return $this->belongsToMany(matter::class, "student_matters");
    }

    public function teachers(){
        return $this->belongsToMany(teacher::class, "student_teachers");
    }
}
