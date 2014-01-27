<?php

class Course extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'teacher_id' => 'required'
	);
}
