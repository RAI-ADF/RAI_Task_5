<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = ['name', 'user_id', 'description'];


    //funnction
    public function owner()
    {
    	return $this->belongsTo('App\User','user_id', 'id');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function tasks()
    {
    	return $this->hasMany('App\Task');
    }

    public function isOwned($user)
    {
        if($user->id==$this->owner()->get()->first()->id)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
