<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';


    protected $fillable = [
        'title'
    ];


    public function sessions() {
        return $this->hasMany(Session::class,'class_id');
    }
}
