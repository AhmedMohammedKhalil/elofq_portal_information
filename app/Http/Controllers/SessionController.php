<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Session;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $classes = Classes::all();
        $teachers = Teacher::all();
        return view('admins.sessions.index',get_defined_vars());
    }


    public function create()
    {
        return view('admins.sessions.create');
    }

    public function edit(Request $r)
    {
        return view('admins.sessions.edit',['session_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        Session::whereId($r->id)->delete();
        return redirect()->route('admin.session.index');
    }
}
