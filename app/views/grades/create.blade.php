@extends('layouts.scaffold')

@section('main')

<h1>Create Grade</h1>

{{ Form::open(array('route' => 'grades.store')) }}
	<ul>
        <li>
            {{ Form::label('course_id', 'Course_id:') }}
            {{ Form::input('number', 'course_id') }}
        </li>

        <li>
            {{ Form::label('student_id', 'Student_id:') }}
            {{ Form::input('number', 'student_id') }}
        </li>

        <li>
            {{ Form::label('value', 'Value:') }}
            {{ Form::text('value') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


