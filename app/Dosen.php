<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
class Dosen extends Model
{
    protected $table = 'dosen';

    protected $fillable = ['nama','nip','kelompok_keahlain'];

    public function mahasiswa(){
    	return $this->hasMany ('App\Mahasiswa','id_dosen');
    }
}
