<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{


    public function showLoginForm() {
        return view('patients.login');
    }

    public function showRegisterForm() {
        return view('patients.register');
    }


    public function profile() {
        return view('patients.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('patients.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('patients.changePassword',['page_name' => 'تغيير كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('patient')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }


    public function getPatients(?int $id) {
        $patients = "";
        if($id != null) {

        } else {

        }
        return $patients;
    }


    public function getPrescription(int $id) {
        $prescriptions = [];
        return $prescriptions;
    }

    public function adminShowPatients() {
        $patients = $this->getPatients(null);
        return view('admins.patients.index',compact('patients'));
    }


    public function adminShowPrescription(Request $r) {
        $prescriptions = $this->getPrescription($r->id);
        return view('admins.patients.showprescription',compact('prescriptions'));
    }


    public function doctorShowPatients(Request $r) {
        $patients = $this->getPatients(null);
        return view('doctors.patients.index',compact('patients'));
    }


    public function doctorShowPrescription(Request $r) {
        $prescriptions = $this->getPrescription($r->id);
        return view('doctors.patients.showprescription',compact('prescriptions'));
    }


    public function nurseShowPatients() {
        $patients = $this->getPatients(null);
        return view('nurses.patients.index',compact('patients'));
    }


    public function nurseShowPrescription(Request $r) {
        $prescriptions = $this->getPrescription($r->id);
        return view('nurses.patients.showprescription',compact('prescriptions'));

    }


    public function showPrescription() {
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
