<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'history',
        'teacher_name',
        'student_name'
    ];

    public function teacher(){
        return $this->hasMany(Teacher::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }
}
