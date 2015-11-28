<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Group;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GroupController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$groups = Group::latest()->get();
		return view('group.index', compact('groups'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('group.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Group::create($request->all());
		return redirect('group');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$group = Group::findOrFail($id);
		return view('group.show', compact('group'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$group = Group::findOrFail($id);
		return view('group.edit', compact('group'));
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
		$group = Group::findOrFail($id);
		$group->update($request->all());
		return redirect('group');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Group::destroy($id);
		return redirect('group');
	}

}
