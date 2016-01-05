@extends('layouts.app')

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			Tasks
			<a href="{{ action('TasksController@create') }}" class="btn btn-xs btn-default btn-fab pull-right"><i class="material-icons"></i>+</a>
			<a href="{{ action('TasksController@index') }}" class="btn btn-xs btn-default btn-fab pull-right"><i class="material-icons"></i>@</a>
		</div>

		<div class="panel-body">

			@foreach ($tasks as $task)
				<task>
					<h2><a href="tasks/{{ $task->id }}">{{ $task->id }}</a></h2>
					<pre>{{ $task->task_text }}</pre>
				</task>
			@endforeach
		</div>
	</div>

@endsection