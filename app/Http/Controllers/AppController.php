<?php

namespace App\Http\Controllers;

use App\Bear;
use App\Fish;
use App\Picnic;
use App\Tree;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bears = Bear::all();
        $fish = Fish::all();
        $tree = Tree::all();
        $picnic = Picnic::all();
        if(Auth::check()){
            Date::setLocale('id');
            $user = Auth::getUser();
            return view('home',compact('user','bears','fish','tree','picnic'));
        }
    }
}
