<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        $teachers = Teacher::all();
        return view('admins.teachers.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.teachers.create');
    }


    public function edit(Request $r)
    {
        return view('admins.teachers.edit',['teacher_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        Teacher::whereId($r->id)->delete();
        return redirect()->route('admin.teacher.index');
    }
}
