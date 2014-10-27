<?php

class PetSeeder extends Seeder 
{
	public function run()
	{
		DB::table('pets')->insert(array(
			array('id'=>1, 'Name'=>"SomeCat", 'Age'=>5, 'Pettype_id'=>1)
		));
	}	
}

?>