<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Service;
use App\Models\Book;
use App\Models\Sliders;
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
        $books = Book::Limit(10)->get();
        $sliders = Sliders::all();
        $services = Service::where('type','!=','main')->get();
        $service = Service::where('type','main')->first();
        $about = Abouts::Limit(1)->first();
        return view('home',compact('books','sliders','about','services','service'));
    }



    public function showBook(Request $r)
    {
        $book = Book::whereId($r->id)->first();
        return view('showbook',compact('book'));
    }





    public function search()
    {
        return view('search');
    }


}
