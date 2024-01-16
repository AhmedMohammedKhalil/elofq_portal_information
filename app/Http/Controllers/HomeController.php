<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Book;
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
        $books = Book::all();
        $services = Service::all();
        return view('home');
    }

    public function allBooks()
    {
        $books = Book::all();
        return view('allbooks',compact('books'));
    }

    public function showBook(Request $r)
    {
        $book = Book::whereId($r->id)->first();
        return view('showbook',compact('book'));
    }





    public function search()
    {
        $books = Book::all();
        return view('search',compact('books'));
    }


}
