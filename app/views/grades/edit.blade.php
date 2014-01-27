@extends('layouts.scaffold')

@section('main')

<h1>Edit Grade</h1>
{{ Form::model($grade, array('method' => 'PATCH', 'route' => array('grades.update', $grade->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('grades.show', 'Cancel', $grade->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
