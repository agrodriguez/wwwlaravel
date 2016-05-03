<?php

namespace App\Http\Controllers;

use App\Article;

//use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Request; //facades ??? Whistkey tango foxtrot
use App\Http\Requests\ArticleRequest;
//use Illuminate\Http\Request; /* no usar con use Request;*/




class ArticlesController extends Controller
{
    //
    public function index()
    {
    	//
    	$articles = Article::latest('published_at')->published()->get();
    	return view('articles.index', compact('articles'));
    }


    //
    public function show($id)
    {
    	//
    	$article = Article::findOrFail($id);
        //dd($article->published_at->diffForHumans());
    	return view('articles.show', compact('article'));
    }

    //
    public function create()
    {
        //
        return view('articles.create');
    }

    //
    public function store(ArticleRequest $request)
    {
        //

        //usar con use Request; y use App\Http\Requests\CreateArticleRequest;
        Article::create(Request::all());
        return redirect('articles');
    }


    // opcion alternativa para validacion
    /*public function store(Request $request)
    {

        //

        //usar con use Illuminate\Http\Request;
        $this->validate($request,[
            'title'=>'required|min:3',
            'body'=>'required',
            'published_at'=>['required','date']
        ]);
        Article::create(Request::all());
        return redirect('articles');
    }*/

    //
    public function edit($id)
    {
        //

        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    //
    public function update($id, ArticleRequest $request)
    {
        //

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }


    
}
