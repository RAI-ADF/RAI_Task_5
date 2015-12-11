<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileController extends Controller {

	public function index(){

		$nama = "Annisa";
		$umur = 21;
		//$nama = "Annisa";
		//$umur = 21;

		return view('profile', compact('nama','umur'));
	}

	public function materi(){
		$datas = ['html', 'css', 'js'];
		return view('materi')->with('datas',$datas);
	}
}
