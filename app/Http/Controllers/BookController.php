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
        $books = Book::all();
        return view('admin.books.index',compact($books));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $r)
    {
        $book = Book::find($r->id);
        return view('admin.books.show',compact($book));
    }


    public function edit(Request $r)
    {
        return view('admin.books.edit',['book_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        Book::whereId($r->id)->delete();
        return redirect()->route('admin.books.index');
    }
}
