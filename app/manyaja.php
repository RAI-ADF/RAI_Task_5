<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manyaja extends Model
{
    //
	public function manymanys()
    {
        return $this->belongsToMany('App\manymany');
		$manyaja = App\manyaja::find(1);
		
		foreach ($manyja->manymanys as $manymany) {
		$manymanys = App\manyaja::find(1)->manymanys()->orderBy('name')->get();
  
		}
    }
}
