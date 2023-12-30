<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->hasMany(Teacher::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class);
    }


}
