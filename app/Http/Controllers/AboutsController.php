<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index()
    {
        return view('admins.abouts.index',['abouts'=>Abouts::all()]);
    }

    public function edit(Request $r)
    {
        return view('admins.abouts.edit',['about_id'=>$r->id]);
    }

}
