<?php

class Grade extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'course_id' => 'required',
		'student_id' => 'required',
		'value' => 'required'
	);
}
