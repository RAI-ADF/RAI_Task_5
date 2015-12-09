<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    public $table = "account";
    public $fillable = ['email','password'];
}
