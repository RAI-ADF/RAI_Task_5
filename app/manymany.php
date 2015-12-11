<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manymany extends Model
{
     public function manyajas()
    {
        return $this->belongsToMany('App\manyaja');
		$manyaja = App\manyja::find(1);

		foreach ($manyaja->manymanys as $manymany) {
		echo $manymany->pivot->created_at;
		}
    }
}
