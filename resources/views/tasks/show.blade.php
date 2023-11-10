@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>Completed: {{ $task->completed ? 'Yes' : 'No' }}</p>
    <p>Created at: {{ $task->created_at }}</p>
    <p>Updated at: {{ $task->updated_at }}</p>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Task List</a>
@endsection