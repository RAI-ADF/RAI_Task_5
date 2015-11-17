<?php

class Articles extends Eloquent
{
	public function author()
	{
		return $this->belongTo('author');
	}
}