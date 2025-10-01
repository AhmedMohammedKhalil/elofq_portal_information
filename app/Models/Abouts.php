<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    use HasFactory;
    public $table = 'abouts';

    protected $fillable = [
        'content', 'title','image','heading',
    ];
}
