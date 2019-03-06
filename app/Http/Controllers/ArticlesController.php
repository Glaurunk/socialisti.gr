<?php
// Actions Handled By Resource Controller
//
// Verb	      URI	                      Action	Route Name
// GET	      /articles	                index	  articles.index
// GET	      /articles/create	        create	articles.create
// POST	      /articles	                store	  articles.store
// GET	      /articles/{article}	      show	  articles.show
// GET	      /articles/{article}/edit	edit	  articles.edit
// PUT/PATCH	/articles/{article}	      update	articles.update
// DELETE	    /articles/{article}	      destroy	articles.destroy

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => [
          'index', 'show'
          ]]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(10);
        //return view('articles.index', compact('articles'));
        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//validation
        $this->validate($request, [
          'title' => 'required',
          'body' => 'required'
        ]);
//create article
        $article = new Article;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();
// redirect
        return redirect()->route('articles.show', [$article])->with('success', 'Το άρθρο δημιουργήθηκε επιτυχώς.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $article = Article::find($id);
      return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $article = Article::find($id);
      return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//validation
        $this->validate($request, [
          'title' => 'required',
          'body' => 'required'
        ]);
//update article
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();
// redirect
        return redirect()->route('articles.show', [$article])->with('success', 'Το άρθρο ενημερώθηκε επιτυχώς.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Το άρθρο διαγράφηκε επιτυχώς.');
    }
}
