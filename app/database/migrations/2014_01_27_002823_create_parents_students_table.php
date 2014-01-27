<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParentsStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parents_students', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('parent_id')->unsigned();
			$table->integer('student_id')->unsigned();
			$table->unique(array('parent_id', 'student_id'));
                        $table->foreign('parent_id')->references('id')->on('users');
                        $table->foreign('student_id')->references('id')->on('users');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parents_students');
	}

}
