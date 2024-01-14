<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;
    protected $guard = 'doctor';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'is_approved',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function nurses () {
        return $this->hasMany(Nurse::class);
    }

    public function appointments () {
        return $this->hasMany(AppointmentDoctor::class);
    }

    public function patients()
    {
        return $this->belongsToMany(AppointmentBooking::class,'appointment_bookings','doctor_id','patient_id')
        ->using(AppointmentBooking::class)->withPivot('id','acceptable','notes')->withTimestamps();
    }
}