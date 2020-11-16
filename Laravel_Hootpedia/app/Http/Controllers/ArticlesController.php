<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        //renders a list
        $articles=Article::Latest()->get();
        return view('articles.index',['articles'=>$articles]);
    }

    public function show($id)
    {
        //shows a single resource
        $article = Article::find($id);
        return view('articles.show', ['article'=>$article]);
    }

    public function create()
    {
        //shows a view that renders post form
        return view('newpost');
    }

    public function store()
    {
        //persist new resource
    }

    public function edit()
    {
        //show a form to edit existing form

    }

    public function update()
    {
        //persist edited resource
    }

    public function destroy()
    {
        //deletes a resource
    }
}
