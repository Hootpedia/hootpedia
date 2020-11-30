<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        //renders a list
        $article=Article::latest()->get();
        //$article=Article::query()->where('title', 'Like', '%' . request('term') . '%');

       $article->orderBy('id', 'DESC')->paginate(10);
       //return view('articles.results',['article'=>$article]);
    }

    public function show($id) //$title was $id
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
        $article = new Article();
        $article->tag=request('tag');
        $article->title = request('title');
        $article->content = request('content');

        $article->save();

        return redirect('/');
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
