<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Address;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AddressController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
	    $this->middleware('auth');
	}
	
	public function index()
	{
		$addresses = Address::latest()->get();
		return view('address.index', compact('addresses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return view('address.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Address::create($request->all());
		return redirect('/user/'.$request->input('user_id'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$address = Address::findOrFail($id);
		return view('address.show', compact('address'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$address = Address::findOrFail($id);
		return view('address.edit', compact('address'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$address = Address::findOrFail($id);
		$address->update($request->all());
		return redirect('/user/'.$address->user_id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Address::destroy($id);
		return redirect('address');
	}

}
