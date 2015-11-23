<?php

namespace App\Http\Controllers;
use App\mahasiswa;
use Request;
use DB;
use Input;
use Redirect;
use Auth;
use App\Http\Requests\MahasiswaRequest;


// use App\Http\Requests;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        //
        mahasiswa::create($request->all());
        return redirect('mahasiswa');

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

    public function home()
    {
        //
        return view('pages.mahasiswa.home');
    }

    public function formCreate()
    {
        return view('pages.mahasiswa.create');
    }

    public function formCreateSave()
    {
        $nim = Input::get('nim');
        $nama = Input::get('nama');
        $jurusan = Input::get('jurusan');

        $data = array('nim' => $nim, 'nama' => $nama,'jurusan' => $jurusan);
        DB::table('mahasiswas')->insert($data);
        
        // $mhs = new mahasiswa;
        // $mhs->nim=Request::get('nim');
        // $mhs->nama=Request::get('nama');
        // $mhs->jurusan=Request::get('jurusan');
        return view('pages.mahasiswa.create')->with('message','Data berhasil ditambahkan');
        // $mhs->save();
        
    }

    public function viewAll()
    {
        $data = DB::table('mahasiswas')->get();
        return view('pages.mahasiswa.view')-> with ('data',$data);
    }

    public function formEdit($nim)
    {
        $data = DB::table('mahasiswas')->where('nim','=',$nim)->first();
        if (!$data) {
            abort(404);
        }
        return view('pages.mahasiswa.edit')->with('data',$data);
    }

    public function formEditUpdate()
    {
        $data = array('nama' => Input::get('nama'), 'jurusan' => Input::get('jurusan'));
        $nim = Input::get('nim');
        DB::table('mahasiswas')-> where('nim','=',$nim)->update($data);
        return Redirect::to('/mahasiswa/view')->with('message','Data berhasil dihapus');
    }

    public function formDelete($id)
    {
        DB::table('mahasiswas')->where('nim','=',$id)->delete();
        return Redirect::to('/mahasiswa/view')->with('message','Data berhasil dihapus');
    }

    public function login(){
        return view('pages.mahasiswa.login');
    }

    public function loginCheck()
    {
        if(Auth::attempt(['username'=>Input::get('username'),'password'=>Input::get('password')]))
        {
            echo "login  sukses";
        }else
        {
            echo "login gagal";
        }
    }
}
