<?php

class Article extends Eloquent{
	public function user(){
		return $this->belongTo('user);
	}
}
