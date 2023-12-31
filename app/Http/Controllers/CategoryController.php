<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
            
        
        $articles=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->get();
        return view('article.category',compact('article','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function articles_by_category(Category $category)
    {
        $articles=Article::where('category_id',$category->id)->where('is_accepted' ,true)->orderBy('created_at','DESC')->get();
        return view('article.category',compact('article','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
