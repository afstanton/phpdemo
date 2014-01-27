<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('roles')->truncate();

		$roles = array(
			array("name" => "Teacher"),
			array("name" => "Student"),
			array("name" => "Parent"),
			array("name" => "Admin"),
		);

		// Uncomment the below to run the seeder
		DB::table('roles')->insert($roles);
	}

}
