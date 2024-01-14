<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prescriptions = auth('patient')->user()->prescriptions;
        return view('patients.prescriptions.index',compact($prescriptions));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.prescriptions.create');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    public function edit(Request $r)
    {
        return view('patients.prescriptions.edit',['prescription_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        //delete
    }
}
