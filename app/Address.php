<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = 'addresses';

    protected $fillable = ['country', 'province', 'city', 'street'];

    //function
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
