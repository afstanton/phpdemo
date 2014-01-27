@extends('layouts.scaffold')

@section('main')

<h1>All Courses</h1>

<p>{{ link_to_route('courses.create', 'Add new course') }}</p>

@if ($courses->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Teacher_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($courses as $course)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no courses
@endif

@stop
