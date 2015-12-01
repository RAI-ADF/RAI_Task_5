<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

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
	public function __construct()
	{
	    $this->middleware('auth');
	}
	
	public function index()
	{
		//$tasks = Task::latest()->get();
		$tasks = Auth::user()->tasks()->get();
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
		$this->validate($request, ['name' => 'required|min:4:unique:tasks',
			  					 	'starting_time' => 'required',
			  					 	'finising_time' => 'required',
			  					 	'user_id' => 'required']);
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
