@extends('layouts.app')

@section('content')
	<h2>Task #{{ $task->id }}</h2>
	<pre>Task {{ $task->task_text}}</pre>
@endsection