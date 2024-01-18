<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admins.services.index',['services'=>Service::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.services.create');
    }





    public function edit(Request $r)
    {
        return view('admins.services.edit',['service_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        //delete
    }
}
