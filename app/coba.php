<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coba extends Model
{
    //
	public function article {
		 return $this->hasOne('App\Article');
		 $article = coba::find(1)->article;
		 return $this->hasOne('App\Article', 'foreign_key');
		 return $this->hasOne('App\Article', 'foreign_key', 'local_key');
	}
	
	
}
