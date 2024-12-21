<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
     
    }

    public function show($slug)
    {
        return Article::where('slug', $slug)->firstOrFail();
    }

    public function store(Request $request)
    {
    
        try {
            $request->validate([
            'title' => 'required|string|max:255',
            'resume' => 'required|string',
            'article' => 'required|string'
        ]);

        $article = Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'resume' => $request->resume,
            'article' => $request->article
        ]);

        return response()->json($article, 201);
        } catch (\Throwable $th) {
          dd($th->getMessage());
        }
       
        
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'resume' => 'required|string',
            'article' => 'required|string'
        ]);

        $article->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'resume' => $request->resume,
            'article' => $request->article
        ]);

        return response()->json($article);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }
}