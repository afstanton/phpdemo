@extends('layouts.scaffold')

@section('main')

<h1>Show Course</h1>

<p>{{ link_to_route('courses.index', 'Return to all courses') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Teacher_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $course->name }}}</td>
					<td>{{{ $course->teacher_id }}}</td>
                    <td>{{ link_to_route('courses.edit', 'Edit', array($course->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy', $course->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
