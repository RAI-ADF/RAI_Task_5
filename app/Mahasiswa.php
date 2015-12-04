<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = ['nama','nim','kelas'];

    public function wali(){
    	return $this->hasOne('App\Wali','id_mahasiswa');
    }

    public function user(){
        return $this->hasOne('App\User','id');
    }

    public function dosen(){
    	return $this->belongsTo('App\Dosen','id_dosen');
    }

    public function matkul(){
    	return $this->belongsToMany('App\Matkul','mahasiswa_matkul','id_mahasiswa','id_matkul');
    }
}
