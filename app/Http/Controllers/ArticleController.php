<?php

namespace App\Http\Controllers;

use Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\AddArticleRequest;

class ArticleController extends Controller
{
   public function index(){
   		$article = Article::latest('published_at')->dipublish()->get();
   		return view('article.index')->with('article',$article);
   }
   public function baca($id){
   		//return $id;
   	//echo 'malah ini yang dipakai';
   		$article = Article::firstOrFail($id);
   		dd($article->created_at->month);
   		return view('article.baca')->with('article',$article);
   }
   public function add(){
		return view('article.add');
	}
	public function simpan(AddArticleRequest $request){
		Article::create($request::all());
		return redirect('article');
	}
}
