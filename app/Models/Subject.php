<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'teacher',
    ];

    public function teacher(){
        return $this->hasMany(Teacher::class);
    }

    public function student(){
        return $this->belongsToMany(Student::class);
    }
}
