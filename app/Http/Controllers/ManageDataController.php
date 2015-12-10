<?php namespace App\Http\Controllers;

class ManageDataController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		return view('indexmanagedata');
	}

	public function inputData()
	{
		return view('inputdata');
	}

	public function updateData()
	{
		return view('managedata');
	}

	public function deleteData()
	{
		return view('managedata');
	}

		public function create()
         {
             $Buku= Input::all();
               $Buku = new buku;
               $Buku->judul = Input::get('judul');
               $Buku->pengarang = Input::get('pengarang');
               $Buku->genre = Input::get('genre');
               $Buku->save();

            return Redirect::back();
        } 

}
