<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function allDoctors()
    {
        $doctors = Doctor::all();
        return view('alldoctors',compact('doctors'));
    }

    public function showDoctor(Request $r)
    {
        $doctor = Doctor::whereId($r->id)->first();
        return view('showdoctor',compact('doctor'));
    }

    public function showDoctorTable(Request $r)
    {
        $doctor = Doctor::whereId($r->id)->first();
        return view('doctortable',compact('doctor'));
    }

    public function articles()
    {
        $articles = Article::all();
        return view('articles',compact('articles'));
    }

    public function search()
    {
        $doctors = Doctor::all();
        return view('search',compact('doctors'));
    }

    public function contactus() {
        return view('contactus');
    }
}
