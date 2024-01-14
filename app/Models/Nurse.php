<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Nurse extends Authenticatable
{
    use HasFactory;
    protected $guard = 'nurse';

    protected $fillable = [
        'name',
        'email',
        'image',
        'phone',
        'password',
        'doctor_id'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function doctor () {
        return $this->belongsTo(Doctor::class);
    }
}