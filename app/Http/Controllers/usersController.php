<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Hash, Redirect;
use Auth;
use Input;
use Request;
use DB;

use App\Http\Requests\signInValidation;
use App\Http\Requests\signUpValidation;
use App\Http\Controllers\Controller;
use App\User;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(signUpValidation $data)
    {
        $name = $data->name;
        $email = $data->email;
        $password = Hash::make($data->password);
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        );
        DB::table('users')->insert($data);
        return Redirect::to('users')->with('message','Successfully Sign Up');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(signInValidation $data){
        $username = Input::get('email');
        $password = Input::get('password');
        if(Auth::attempt(array('email'=>$username,'password'=>$password)))
        {
            if(Auth::user()->id=='1'){
                return Redirect::to('admin');
            }
            else{
                echo "user";
            }
        }
        else{
            return Redirect::to('users')->with('invalid','Incorrect E-mail and Password, please try again');
        }
    }

    public function admin(){
        return view('admin');
    }
}
