<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AppointmentBooking extends Pivot
{
    use HasFactory;
    public $table = 'appointment_bookings';

    protected $fillable = [
        'acceptable', 'notes', 'doctor_id','patient_id'
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
    public function pateint() {
        return $this->belongsTo(Patient::class);
    }
}
