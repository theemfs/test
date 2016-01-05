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
				<task class="col-xs-10 col-sm-offset-1">

					<h2 class="">
						<a href="tasks/{{ $task->id }}">
							<span>{{ $task->id }}</span>
							<span>{{ $task->name }}</span>
						</a>
					</h2>

					<p class='col-xs-12 text-success'>{{ $task->created_at }}</p>
					<p class='col-xs-12 text-success'>{{ $task->changed_at }}</p>
					<p class='col-xs-12 text-success'>{{ $task->id }}</p>

					<pre>{{ $task->text }}</pre>

				</task>


			@endforeach

		</div>
	</div>

@endsection