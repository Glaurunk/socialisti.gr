<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
  public function home()
  {
      $articles = Article::orderBy('id', 'desc')->take(3)->get();
      return view('home')->with('articles', $articles);
  }

  public function contact()
  {
      return view('contact');
  }


}
