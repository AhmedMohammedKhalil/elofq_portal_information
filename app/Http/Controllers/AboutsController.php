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

    public function editMain(Request $r)
    {
        return view('admins.abouts.editmain',['about_id'=>$r->id]);
    }

    public function delete(Request $r)
    {
       Abouts::whereId($r->id)->delete();
       return redirect()->route('admin.about.index');
    }
}
