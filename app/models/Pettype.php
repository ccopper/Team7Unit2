<?php

class Pet extends Eloquent
{
	protected $fillable = array('Name','Age', 'Petype_id');
	
	public $timestamps = false;
	public function Quotes()
	{
		return $this->hasMany('Quotes');
	}
}

?>