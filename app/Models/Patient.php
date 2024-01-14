<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;
    protected $guard = 'patient';

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function doctors()
    {
        return $this->belongsToMany(AppointmentBooking::class,'appointment_bookings','patient_id','doctor_id')
        ->using(AppointmentBooking::class)->withPivot('id','acceptable','notes')->withTimestamps();
    }

    public function prescriptions () {
        return $this->hasMany(Prescription::class);
    }
}