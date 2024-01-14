<?php

namespace App\Http\Controllers;

use App\Models\AppointmentBooking;
use Illuminate\Http\Request;

class AppointmentBookingController extends Controller
{


    public function getBookingAppointments(?int $id) {
        $b_appointments = "";
        if($id != null) {

        } else {

        }
        return $b_appointments;
    }
    public function adminShowAppointments() {
        $bookingsappointments = $this->getBookingAppointments(null);
        return view('admins.appointments.index',compact('b_appointments'));
    }


    public function doctorShowAppointmentBookings() {
        $bookingsappointments = $this->getBookingAppointments(auth('doctor')->user()->id);
        return view('doctors.show-bookings',compact('b_appointments'));
    }


    public function patientShowAppointmentBookings() {
        $bookingsappointments = $this->getBookingAppointments(auth('patient')->user()->id);
        return view('patients.bookings.index',compact('b_appointments'));
    }

    public function patientShowAppointmentBooking() {
        $booking = "";
        return view('patients.bookings.show',compact('b_appointment'));
    }

    public function patientbookAppointment() {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingsappointments = $this->getBookingAppointments(auth('nurse')->user()->doctor->id);
        return view('nurses.bookings.index',compact('b_appointments'));
    }


    public function accept(Request $r)
    {

    }


    public function reject(Request $r)
    {

    }


}
