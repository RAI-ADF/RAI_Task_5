<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    protected $fillable = array('weight', 'bear_id');

    protected $table = 'fish';

    public function bear() {
        return $this->belongsTo('Bear');
    }
}
