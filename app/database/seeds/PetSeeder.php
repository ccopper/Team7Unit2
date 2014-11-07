<?php

class PetSeeder extends Seeder 
{
	public function run()
	{
		DB::table('pets')->delete();
		DB::table('pets')->insert(array(
			array('id'=>1, 'name'=>"SomeCat", 'age'=>5, 'pettype_id'=>1),
			array('id'=>2, 'name'=>"Felix", 'age'=>10, 'pettype_id'=>1),
			array('id'=>3, 'name'=>"Fido", 'age'=>3, 'pettype_id'=>2),
			array('id'=>4, 'name'=>"Rusty", 'age'=>1, 'pettype_id'=>2),
			array('id'=>5, 'name'=>"Fluffy", 'age'=>15, 'pettype_id'=>1),
			array('id'=>6, 'name'=>"Rodger", 'age'=>6, 'pettype_id'=>2),
			array('id'=>7, 'name'=>"Mittens", 'age'=>7, 'pettype_id'=>1),
		));
	}	
}

?>