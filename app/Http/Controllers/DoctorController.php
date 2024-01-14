<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{


    public function showLoginForm() {
        return view('doctors.login');
    }

    public function showRegisterForm() {
        return view('doctors.register');
    }


    public function profile() {
        return view('doctors.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('doctors.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('doctors.changePassword',['page_name' => 'تغيير كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admins.doctors.index',compact('doctors'));
    }



    public function adminShowDoctor(Request $r)
    {
        $doctor = Doctor::whereId($r->id)->first();
        return view('admins.doctors.show',compact('doctor'));
    }

    public function accept(Request $r)
    {
        $doctor = Doctor::whereId($r->id)->first();
        return view('admins.doctors.show',compact('doctor'));
    }

    public function reject(Request $r)
    {
        $doctor = Doctor::whereId($r->id)->first();
        return view('admins.doctors.show',compact('doctor'));
    }




}
