<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class sampleController extends Controller{
	public function detail(){
		$name='Edward';
		//return view('pages.detail')->with('name',$name);
		return view('pages.detail')->with('name','Samsul');
	}

	public function about(){
		return 'wow wow ';
	}
}