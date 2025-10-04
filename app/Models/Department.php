<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];


    public function sessions() {
        return $this->hasMany(Session::class,'department_id');
    }


    public function teachers() {
        return $this->hasMany(Teacher::class,'department_id');
    }
}
