<?php

class PettypeSeeder extends Seeder 
{
	public function run()
	{
		DB::table('pettypes')->delete();
		DB::table('pettypes')->insert(array(
			array('id'=>1, 'Name'=>"Cat"),
			array('id'=>2, 'Name'=>"Dog")
		));
	}	
}

?>