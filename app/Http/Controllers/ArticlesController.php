<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
   public function index()
    {

        $article =Article::latest()->get();

       return view('/',['article'=>$article]);
    }


    public function show($id)
    {
        //shows a single resource
        $article = Article::find($id);
        return view('articles.show', ['article'=>$article]);
    }

    public function gettaghtml()
    {

        $articles = Article::where('tag', 'HTML/CSS')
            ->orderBy('id', 'desc')
            ->get();
        //$article->orderBy('id', 'DESC')->paginate(10);
        return view('home', ['articles'=>$articles]);


    }
    public function gettagjava()
    {

        $articles = Article::where('tag', 'Java')
            ->orderBy('id', 'desc')
            ->get();
        //$article->orderBy('id', 'DESC')->paginate(10);
        return view('home', ['articles'=>$articles]);


    }
    public function gettagcplusplus()
    {
        $articles = Article::where('tag', 'C/C++')
            ->orderBy('id', 'desc')
            ->get();
        //$article->orderBy('id', 'DESC')->paginate(10);
        return view('home', ['articles'=>$articles]);
    }
    public function gettagpython()
    {
        $articles = Article::where('tag', 'Python')
            ->orderBy('id', 'desc')
            ->get();
        //$article->orderBy('id', 'DESC')->paginate(10);
        return view('home', ['articles'=>$articles]);
    }
    public function gettagsql()
    {
        $articles = Article::where('tag', 'SQL')
            ->orderBy('id', 'desc')
            ->get();
        //$article->orderBy('id', 'DESC')->paginate(10);
        return view('home', ['articles'=>$articles]);
    }
    public function gettagfundamentals()
    {
        $articles = Article::where('tag', 'Fundamentals')
            ->orderBy('id', 'desc')
            ->get();
        //$article->orderBy('id', 'DESC')->paginate(10);
        return view('home', ['articles'=>$articles]);
    }
    public function gettagjavascript()
    {
        $articles = Article::where('tag', 'Javascript')
            ->orderBy('id', 'desc')
            ->get();
        //$article->orderBy('id', 'DESC')->paginate(10);
        return view('home', ['articles'=>$articles]);
    }

    public function create()
    {
        //shows a view that renders post form
        return view('newpost');
    }

    public function store()
    {
        request()->validate([
            'title'=>'required',
            'tag'=>'required',
            'content'=>'required'
        ]);
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
