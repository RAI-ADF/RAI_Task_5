<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';

    protected $fillable = ['nama','jmlSKS'];

    public function mahasiswa(){
    	return $this->belongsToMany('App\Mahasiswa','mahasiswa_matkul','id_matkul','id_mahasiswa');
    }
}
