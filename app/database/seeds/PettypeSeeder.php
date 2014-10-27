<?php

class PettypeSeeder extends Seeder 
{
	public function run()
	{
		DB::table('pettype')->insert(array(
			array('id'=>1, 'Name'=>"Cat"),
			array('id'=>2, 'Name'=>"Dog")
		));
	}	
}

?>