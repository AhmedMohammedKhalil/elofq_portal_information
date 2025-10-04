<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'type','day','date', 'department_id','teacher_id','class_id'
    ];


    public function class() {
        return $this->belongsTo(Classes::class,'class_id');
    }

    public function department() {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
}
