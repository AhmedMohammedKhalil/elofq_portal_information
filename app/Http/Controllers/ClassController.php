<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();
        return view('admins.classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.classes.create');
    }


    public function edit(Request $r)
    {
        return view('admins.classes.edit',['class_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        Classes::whereId($r->id)->delete();
        return redirect()->route('admin.class.index');
    }
}
