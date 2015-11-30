<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TaskController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::latest()->get();
		return view('task.index', compact('tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('task.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Task::create($request->all());
		return redirect('group/'.$request->group_id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$task = Task::findOrFail($id);
		return view('task.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$task = Task::findOrFail($id);
		return view('task.edit', compact('task'));
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
		$task = Task::findOrFail($id);
		$task->update($request->all());
		return redirect('task');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Task::destroy($id);
		return redirect('task');
	}

}
