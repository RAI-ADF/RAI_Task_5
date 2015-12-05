<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MahasiswaController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mahasiswas = Mahasiswa::latest()->get();
		return view('mahasiswa.index', compact('mahasiswas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mahasiswa.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, ['nama' => 'required', 'nim' => 'required', 'kelas' => 'required']); // Uncomment and modify if you need to validate any input.
		Mahasiswa::create($request->all());
		return redirect('mahasiswa');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mahasiswa = Mahasiswa::findOrFail($id);
		return view('mahasiswa.show', compact('mahasiswa'));
	}

	public function show2()
	{
		$mahasiswa = Mahasiswa::findOrFail(Auth::user()->id);
		return view('mahasiswa.show', compact('mahasiswa'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mahasiswa = Mahasiswa::findOrFail($id);
		return view('mahasiswa.edit', compact('mahasiswa'));
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
		$mahasiswa = Mahasiswa::findOrFail($id);
		$mahasiswa->update($request->all());
		return redirect('mahasiswa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mahasiswa::destroy($id);
		return redirect('mahasiswa');
	}

}
