<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Auth::user()->articles()->create(

            [

            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'body'=>$request->input('body'),
            'img'=>$request->file('img')->store("public/img"),
            'category_id'=>$request->input('category_id'),
            
            ]

            );
            
            return redirect()->route('home')->with("message","Articolo caricato correttamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        
    }
    public function articles_by_category(Category $category)
    {
        $articles=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->get();
        return view('articles.category',compact('article','category'));
    }
}
