<?php

class Pet extends Eloquent
{
	protected $fillable = array('Name','Age', 'Petype_id');
	
	public function Pettype()
	{
		return $this->belongsTo('Pettype', 'id);
	}
}

?>