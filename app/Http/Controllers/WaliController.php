<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Wali;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WaliController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$walis = Wali::latest()->get();
		return view('wali.index', compact('walis'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('wali.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Wali::create($request->all());
		return redirect('wali');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$wali = Wali::findOrFail($id);
		return view('wali.show', compact('wali'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$wali = Wali::findOrFail($id);
		return view('wali.edit', compact('wali'));
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
		$wali = Wali::findOrFail($id);
		$wali->update($request->all());
		return redirect('wali');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Wali::destroy($id);
		return redirect('wali');
	}

}
