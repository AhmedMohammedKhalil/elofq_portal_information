<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = auth('patient')->user()->books;
        return view('patients.books.index',compact($books));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.books.create');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    public function edit(Request $r)
    {
        return view('patients.books.edit',['book_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        //delete
    }
}
