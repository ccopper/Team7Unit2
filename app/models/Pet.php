<?php

class Pet extends Eloquent
{
	protected $fillable = array('name', 'age', 'pettype_id');
	public function pettype()
	{
		return $this->belongsTo('Pettype');
	}
}

?>