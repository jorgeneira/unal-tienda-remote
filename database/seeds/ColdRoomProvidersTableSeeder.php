<?php

use Illuminate\Database\Seeder;

class ColdRoomProvidersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('cold_room_providers')->delete();
        
		\DB::table('cold_room_providers')->insert(array (
			0 => 
			array (
				'id' => 1,
				'nombre' => 'BOHN',
				'email' => 'bohn@unaldev.co',
				'product_id' => 1,
			),
			1 => 
			array (
				'id' => 2,
				'nombre' => 'BOHN',
				'email' => 'bohn@unaldev.co',
				'product_id' => 2,
			),
			2 => 
			array (
				'id' => 3,
				'nombre' => 'Poslo Ltda',
				'email' => 'poslo@unaldev.co',
				'product_id' => 3,
			),
			3 => 
			array (
				'id' => 4,
				'nombre' => 'Poslo Ltda',
				'email' => 'poslo@unaldev.co',
				'product_id' => 4,
			),
			4 => 
			array (
				'id' => 5,
				'nombre' => 'HomeCenter',
				'email' => 'homecenter@unaldev.co',
				'product_id' => 5,
			),
			5 => 
			array (
				'id' => 6,
				'nombre' => 'HomeCenter',
				'email' => 'homecenter@unaldev.co',
				'product_id' => 6,
			),
			6 => 
			array (
				'id' => 7,
				'nombre' => 'Rimax',
				'email' => 'rimax@unaldev.co',
				'product_id' => 7,
			),
		));
	}

}
