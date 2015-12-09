<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\account;
use Hash;

use Auth;
use Input;
class accountController extends Controller
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
    public function store(Request $request)
    {
        $input = Request::all();
        $account = new account;
        $account->email = $input['email'];
        $account->password = Hash::make($input['password']);
        $account->name = $input['name'];
        $account->address = $input['address'];
        $account->phone_number = $input['phone_number'];
        $account->privilledge = $input['privilledge'];
        $account->save();
        return redirect('account');
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
        //tion
    }

    public function login(){
        $username = 'asd';
        $password = Hash::make('asd');
        if(Auth::attempt(array('email'=>$username,'password'=>$password)))
        {
            echo "berhasil";
            //if(Auth::account()->privilledge=='admin'){
            //    echo "admin";
            //}
            //else{
            //    echo "user";
            //}
        }
        else{
            echo "gagal login";
        }
    }
}

//Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])