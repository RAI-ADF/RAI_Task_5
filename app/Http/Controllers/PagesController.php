<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Html\HtmlServiceProvider;

class PagesController extends Controller
{
	function home(){
	$name = 'adam';
		//return view('home')->with('name',$name);
		//return view('home',compact('name'));
		return view('page1')->with('name',$name);
	}
	
	function home2(){
		$name = 'adam';
		//return view('array')->with(['name1'=>'adam','name2'=>'aulia']);
		//$name1 = 'aulia';
		return view('page2',compact('name'));
	}
}
