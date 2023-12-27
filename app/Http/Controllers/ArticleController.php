<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

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
        $tags= Tag::all();
        return view('articles.create', compact('tags'));
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

            $selectedTags =$request->input('tags');
            foreach($selectedTags as $tagId){
                $article->tags()->attach($tagId);
            }
            
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
        $tags=Tag::all();
        return view('article.edit',compact('article','tags'));
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
        $article->delete();
        return redirect()->route('article.dashboard');
    }
    public function articles_by_category(Category $category)
    {
        $articles=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->get();
        return view('article.category',compact('article','category'));
    }

    public function articleDashboard()
    {
        return view('article.dashboard');
    }

//     public function update (Request $request,Article $article)
//     {
//         if($request->has('img')){
//             $article->update(
//                 [
//                     'title'=>$request->input('title'),
//                     'description'=>$request->input('description'),
//                     'body'=>$request->input('body'),
//                     'img'=>$request->file('img')->store("public/img"),
//                     'category_id'=>$request->input('category_id')
//                 ]
//                 );
//         } else {
//             $article->update(
//                 [
//                     'title'=>$request->input('title'),
//                     'description'=>$request->input('description'),
//                     'body'=>$request->input('body'),
//                     'category_id'=>$request->input('category_id')  
//                 ]
//                 );
//         }
//         $article->tags()->detach();
//         $articles-tags()->sync($request->input('tags'));
//         return redirect()->route('article.dashboard');
//     }
// 
}