<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('admins.departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.departments.create');
    }


    public function edit(Request $r)
    {
        return view('admins.departments.edit',['department_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        Department::whereId($r->id)->delete();
        return redirect()->route('admin.department.index');
    }
}
