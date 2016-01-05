@extends('layouts.app')

@section('title', 'Create New Task')

@section('content')
    <div class="panel panel-default">
		<div class="panel-heading">Create New Task</div>

		<div class="panel-body">
			{!! Form::open() !!}
				<div class="form-group">
					{!! Form::label('created_at', null, ['class' => 'control-label col-sm-2']) !!}
					{!! Form::text('created_at', null, ['class' => 'form-control']) !!}

					{!! Form::label('changed_at', null, ['class' => 'control-label col-sm-2']) !!}
					{!! Form::text('changed_at', null, ['class' => 'form-control']) !!}

					{!! Form::label('task_text', null, ['class' => 'control-label col-sm-2']) !!}
					{!! Form::textarea('task_text', null, ['class' => 'form-control']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop