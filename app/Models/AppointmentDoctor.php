<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentDoctor extends Model
{
    use HasFactory;

    public $table = 'appointment_doctors';

    protected $fillable = [
        'start_at', 'end_at', 'type','doctor_id'
    ];

    public function doctor () {
        return $this->belongsTo(Doctor::class);
    }
}
