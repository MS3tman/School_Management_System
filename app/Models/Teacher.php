<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'address',
        'email',
        'department',
        'salary',
        'gander',
        'picture',
        'subject_id',
        'attendance_id'
    ];
    
    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function attendance(){
        return $this->belongsTo(Attendance::class);
    }
}
