<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attendance extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->HasMany(Teacher::class);
    }

    public function student(){
        return $this->HasMany(Student::class);
    }
}
