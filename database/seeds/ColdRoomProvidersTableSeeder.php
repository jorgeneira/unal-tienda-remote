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
				'nombre' => 'BOHN',
				'email' => 'bohn@unaldev.co',
			),
			2 => 
			array (
				'nombre' => 'Poslo Ltda',
				'email' => 'poslo@unaldev.co',
			),
			array (
				'nombre' => 'HomeCenter',
				'email' => 'homecenter@unaldev.co',
			),
			array (
				'nombre' => 'Rimax',
				'email' => 'rimax@unaldev.co',
			),
		));
	}

}
