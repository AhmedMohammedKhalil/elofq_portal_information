<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admins.articles.index',['articles'=>Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.articles.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    public function edit(Request $r)
    {
        return view('admins.articles.edit',['article_id'=>$r->id]);
    }



    public function delete(Request $r)
    {
        //delete
    }
}
