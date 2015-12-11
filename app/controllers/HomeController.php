<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('header');
	}

	public function store()
    {
       $rules = array(
            'nama' => 'required',
            'jumlah' => 'required|numeric',
            'ormawa' => 'required',
            'kode' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('edit/'.$id)->withErrors($validator)->withInput();
        } else {
            // store
            $nerd = new Reservasi;
            $nerd->nama = Input::get('nama');
            $nerd->jumlah = Input::get('jumlah');
            $nerd->ormawa = Input::get('ormawa');
            $nerd->kode = Input::get('kode');
            $nerd->save();
            $id=-1;
            $id=$nerd->id;
            if($id>0)
            {
                echo "berhasil";
            }else
            {
                echo "gagal";
            }
            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('/');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reservasi = Reservasi::find($id);
        return View::make('kelolareservasi')->with('reservasi', $reservasi);
    }

    public function update($id)
    {
        $rules = array(
            'nama' => 'required',
            'jumlah' => 'required|numeric',
            'ormawa' => 'required',
            'kode' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('reservasis')
      ->where('id', $id)
      ->update(array(
                  'nama' => Input::get('nama'),
                  'jumlah' => Input::get('jumlah'),
                  'ormawa' => Input::get('ormawa'),
                  'kode' => Input::get('kode'),
                  'updated_at' => new DateTime()
            ));

 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('/');
      }
    }

    public function destroy($id)
    {
      DB::table('reservasis')->where('id', '=', $id)->delete();
      return Redirect::to('/');
    }

}
