<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable =[
    	'judul', 'isi', 'published_at'
    ];
    public function scopeDipublish($query){
    	$query->where('published_at','<=',Carbon::now());
    }
}
