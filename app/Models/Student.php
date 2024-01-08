<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'address',
        'level',
        'gpa',
        'email',
        'gander',
        'picture',
        'attendance_id'
    ];

    public function attendance(){
        return $this->belongsTo(Attendance::class);
    }

    public function subject(){
        return $this->belongsToMany(Subject::class);
    }
}
