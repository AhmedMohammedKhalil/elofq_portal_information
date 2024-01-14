<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NurseController extends Controller
{


    public function showLoginForm() {
        return view('nurses.login');
    }




    public function profile() {
        return view('nurses.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('nurses.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('nurses.changePassword',['page_name' => 'تغيير كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('nurse')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('doctors.nurses.index',['nurses'=>Nurse::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctors.nurses.create');
    }



    /**
     * Display the specified resource.
     */
    public function show(Request $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $r)
    {
        return view('dotors.nurses.edit',['doctor_id'=>$r->id]);

    }



    public function delete(Request $r)
    {
        //delete

    }
}
