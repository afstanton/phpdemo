@extends('layouts.scaffold')

@section('main')

<h1>Show Grade</h1>

<p>{{ link_to_route('grades.index', 'Return to all grades') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Course_id</th>
				<th>Student_id</th>
				<th>Value</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $grade->course_id }}}</td>
					<td>{{{ $grade->student_id }}}</td>
					<td>{{{ $grade->value }}}</td>
                    <td>{{ link_to_route('grades.edit', 'Edit', array($grade->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('grades.destroy', $grade->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
