<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function User {
		 return $this->belongsto('App\coba');
		  return $this->belongsto('App\coba', 'foreign_key');
		 
	}
	
}
