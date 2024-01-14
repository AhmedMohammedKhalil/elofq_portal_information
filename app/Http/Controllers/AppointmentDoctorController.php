<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\AppointmentDoctor;

class AppointmentDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('doctors.appointments.index',['appointments'=>AppointmentDoctor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctors.appointments.create');
    }



    /**
     * Display the specified resource.
     */
    public function show(Request $r)
    {
        return view('doctors.appointments.show',['appointment_id'=>$r->id]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {
        return view('doctors.appointments.edit',['appointment_id'=>$r->id]);

    }



    public function delete(Request $r)
    {
        //delete

    }



    public function adminShowDoctorTable(Request $r)
    {
        $doctor = Doctor::whereId($r->id)->first();
        return view('admins.doctors.showtable',compact('doctor'));
    }

    public function doctorShowTable()
    {
        $doctor = Doctor::whereId(auth('doctor')->user()->id)->first();
        return view('doctors.showtable',compact('doctor'));
    }


    public function nurseShowDoctorTable(Request $r)
    {
        $doctor = Doctor::whereId($r->id)->first();
        return view('nurses.doctors.showtable',compact('doctor'));
    }
}
