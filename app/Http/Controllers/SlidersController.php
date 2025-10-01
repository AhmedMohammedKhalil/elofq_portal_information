<?php

namespace App\Http\Controllers;

use App\Models\Sliders;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index()
    {
        return view('admins.sliders.index',['sliders'=>Sliders::all()]);
    }

    public function create()
    {
        return view('admins.sliders.create');
    }


    public function edit(Request $r)
    {
        return view('admins.sliders.edit',['slider_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
       Sliders::whereId($r->id)->delete();
       return redirect()->route('admin.slider.index');
    }
}
